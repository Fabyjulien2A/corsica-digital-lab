@extends('layouts.app')

@section('title', 'Contactez votre développeur web en Corse | Corsica Digital Lab')

@section(
    'description',
    'Un projet de site internet, de boutique e-commerce ou de développement sur mesure ? Contactez Corsica Digital Lab, développeur web indépendant en Corse.'
)

@section('content')

<section class="page-hero">
    <div class="container page-hero-content">

        <p class="page-eyebrow">CONTACT</p>

        <h1>
            Parlons de votre<br>
            <span>prochain projet.</span>
        </h1>

        <p class="page-hero-description">
            Une idée, un besoin ou simplement une question ?
            Échangeons sur votre projet et trouvons ensemble
            la solution adaptée à votre activité.
        </p>

    </div>
</section>

<section class="contact-page">
    <div class="container contact-layout">

        <div class="contact-intro">

            <p class="section-eyebrow">ÉCHANGEONS</p>

            <h2>
                Chaque projet<br>
                commence par <span>une discussion.</span>
            </h2>

            <p class="contact-intro-text">
                Vous souhaitez créer votre site internet,
                développer votre boutique en ligne ou
                imaginer une solution numérique sur mesure ?
            </p>

            <p class="contact-intro-text">
                Présentez-moi votre projet, même s'il n'est
                encore qu'une idée. Je prendrai le temps
                d'étudier votre demande.
            </p>

            <div class="contact-details">

                <div class="contact-detail">
                    <span class="contact-detail-label">EMAIL</span>
                    <a href="mailto:contact@corsicadigitallab.fr">
                        contact@corsicadigitallab.fr
                    </a>
                </div>

                <div class="contact-detail">
                    <span class="contact-detail-label">LOCALISATION</span>
                    <p>Corse · France</p>
                </div>

                <div class="contact-detail">
                    <span class="contact-detail-label">ACCOMPAGNEMENT</span>
                    <p>En Corse et partout en France</p>
                </div>

            </div>

        </div>

        <div class="contact-form-wrapper">

            <p class="contact-form-eyebrow">VOTRE DEMANDE</p>

            <h2>Parlez-moi de votre projet.</h2>

            <p class="contact-form-description">
                Remplissez ce formulaire pour me présenter
                votre besoin.
            </p>

            {{-- Message de confirmation --}}
            @if(session('success'))
                <div class="contact-alert contact-alert-success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Messages d'erreur --}}
            @if($errors->any())
                <div class="contact-alert contact-alert-error" role="alert">
                    <strong>Veuillez corriger les erreurs suivantes :</strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('contact.store') }}"
                method="POST"
                class="contact-form"
            >

                @csrf

                {{-- Champ anti-spam invisible --}}
                <div class="contact-honeypot" aria-hidden="true">
                    <label for="website">Site web</label>
                    <input
                        type="text"
                        id="website"
                        name="website"
                        value=""
                        tabindex="-1"
                        autocomplete="off"
                    >
                </div>

                <div class="contact-form-row">

                    <div class="contact-field">
                        <label for="name">Votre nom *</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Votre nom"
                            maxlength="100"
                            autocomplete="name"
                            required
                        >
                    </div>

                    <div class="contact-field">
                        <label for="email">Votre adresse e-mail *</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="vous@exemple.fr"
                            maxlength="255"
                            autocomplete="email"
                            required
                        >
                    </div>

                </div>

                <div class="contact-field">
                    <label for="subject">Votre projet *</label>

                    <select id="subject" name="subject" required>

                        <option value="">
                            Sélectionnez votre besoin
                        </option>

                        <option
                            value="site-vitrine"
                            @selected(old('subject') === 'site-vitrine')
                        >
                            Site vitrine
                        </option>

                        <option
                            value="ecommerce"
                            @selected(old('subject') === 'ecommerce')
                        >
                            Boutique e-commerce
                        </option>

                        <option
                            value="developpement"
                            @selected(old('subject') === 'developpement')
                        >
                            Développement sur mesure
                        </option>

                        <option
                            value="maintenance"
                            @selected(old('subject') === 'maintenance')
                        >
                            Maintenance
                        </option>

                        <option
                            value="autre"
                            @selected(old('subject') === 'autre')
                        >
                            Autre demande
                        </option>

                    </select>
                </div>

                <div class="contact-field">
                    <label for="message">Votre message *</label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        maxlength="5000"
                        placeholder="Décrivez votre projet, vos idées ou vos besoins..."
                        required
                    >{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="contact-submit">
                    Envoyer ma demande
                    <span>→</span>
                </button>

                <p class="contact-form-note">
                    Les informations transmises seront utilisées
                    uniquement pour répondre à votre demande.
                </p>

            </form>

        </div>

    </div>
</section>

@endsection
