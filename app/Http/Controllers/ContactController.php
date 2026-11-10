<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Throwable;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => [
                'required',
                'in:site-vitrine,ecommerce,developpement,maintenance,autre'
            ],
            'message' => ['required', 'string', 'max:5000'],
            'website' => ['nullable', 'max:0'],
            'cf-turnstile-response' => ['required', 'string'],
        ]);

        // Champ anti-spam : ne pas traiter les demandes des robots.
        if (!empty($validated['website'])) {
            return redirect()->route('contact');
        }

        // Vérification du CAPTCHA Cloudflare Turnstile
        try {
            $response = Http::timeout(5)->asForm()->post(
                'https://challenges.cloudflare.com/turnstile/v0/siteverify',
                [
                    'secret' => config('services.turnstile.secret_key'),
                    'response' => $validated['cf-turnstile-response'],
                    'remoteip' => $request->ip(),
                ]
            );

            if (
                !$response->successful() ||
                $response->json('success') !== true
            ) {
                return back()
                    ->withInput($request->except('website', 'cf-turnstile-response'))
                    ->withErrors([
                        'turnstile' => 'La vérification de sécurité a échoué. Veuillez réessayer.'
                    ]);
            }
        } catch (Throwable $e) {
            report($e);

            return back()
                ->withInput($request->except('website', 'cf-turnstile-response'))
                ->withErrors([
                    'turnstile' => 'La vérification de sécurité est momentanément indisponible.'
                ]);
        }

        try {
            Mail::to('contact@corsicadigitallab.fr')->send(
                new ContactMessage(
                    name: $validated['name'],
                    email: $validated['email'],
                    subjectType: $validated['subject'],
                    messageContent: $validated['message']
                )
            );
        } catch (Throwable $e) {
            report($e);

            return redirect()
                ->route('contact')
                ->withInput($request->except('website'))
                ->withErrors([
                    'mail' => "Une erreur est survenue lors de l'envoi. Veuillez réessayer plus tard."
                ]);
        }

        return redirect()
            ->route('contact')
            ->with(
                'success',
                'Votre message a bien été envoyé ! Je vous répondrai dès que possible.'
            );
    }
}
