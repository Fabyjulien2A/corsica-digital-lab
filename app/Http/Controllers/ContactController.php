<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        ]);

        // Champ anti-spam : ne pas traiter les demandes des robots.
        if (!empty($validated['website'])) {
            return redirect()->route('contact');
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
