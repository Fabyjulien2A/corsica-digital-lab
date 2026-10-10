
@extends('layouts.app')

@section('title', 'Mentions légales | Corsica Digital Lab')

@section(
    'description',
    'Consultez les mentions légales du site Corsica Digital Lab : éditeur, hébergement et propriété intellectuelle.'
)

@section('content')

<section class="page-hero">
    <div class="container page-hero-content">

        <p class="page-eyebrow">INFORMATIONS LÉGALES</p>

        <h1>
            Mentions <span>légales.</span>
        </h1>

        <p class="page-hero-description">
            Retrouvez les informations légales relatives
            au site Corsica Digital Lab.
        </p>

    </div>
</section>

<section class="legal-page">
    <div class="container">

        <div class="legal-content">

            <h2>1. Éditeur du site</h2>

            <p>
                Le présent site est édité par :
            </p>

            <p>
            <strong>Nom commercial :</strong> Corsica Digital Lab<br>
            <strong>Entrepreneur individuel :</strong> Julien Faby<br>
            <strong>Forme juridique :</strong> Entreprise individuelle (EI)<br>
            <strong>SIREN :</strong> 898 216 866<br>
            <strong>RCS :</strong> Ajaccio<br>
            <strong>Adresse professionnelle :</strong> Les jardins de Monte-Leone 20169 Bonifacio<br>
            <strong>E-mail :</strong>
            <a href="mailto:contact@corsicadigitallab.fr">
                contact@corsicadigitallab.fr
            </a>
            </p>

            <h2>2. Hébergement</h2>

            <p>
                Le site est hébergé par :
            </p>

            <p>
                <strong>Hostinger International Ltd.</strong><br>
                61 Lordou Vironos Street<br>
                6023 Larnaca, Chypre<br>
                <a href="https://www.hostinger.fr"
                   target="_blank"
                   rel="noopener noreferrer">
                    www.hostinger.fr
                </a>
            </p>

            <p>
                Ces informations devront être vérifiées
                selon l'entité d'hébergement figurant sur votre contrat.
            </p>

            <h2>3. Propriété intellectuelle</h2>

            <p>
                Les textes, éléments graphiques, logos, photographies
                et autres contenus présents sur ce site sont protégés
                par les dispositions applicables en matière de
                propriété intellectuelle, sous réserve des droits
                appartenant à des tiers.
            </p>

            <p>
                Toute reproduction ou utilisation non autorisée
                des contenus appartenant à Corsica Digital Lab
                est interdite, sauf dans les cas prévus par la loi.
            </p>

            <h2>4. Responsabilité</h2>

            <p>
                Corsica Digital Lab s'efforce de fournir
                des informations exactes et régulièrement mises à jour.
            </p>

            <p>
                Toutefois, des erreurs ou omissions peuvent survenir.
                Les informations publiées peuvent être modifiées
                à tout moment.
            </p>

            <h2>5. Données personnelles</h2>

            <p>
                Les informations transmises via le formulaire
                de contact sont utilisées pour traiter les demandes
                des visiteurs.
            </p>

            <p>
                Pour en savoir plus, consultez notre
                <a href="{{ route('confidentialite') }}">
                    politique de confidentialité
                </a>.
            </p>

        </div>

    </div>
</section>

@endsection
