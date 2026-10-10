@extends('layouts.app')

@section('title', 'Création de sites web et services numériques en Corse | Corsica Digital Lab')

@section(
    'description',
    'Création de sites vitrines, boutiques e-commerce, développement Laravel et maintenance web en Corse. Des solutions adaptées aux artisans, TPE et PME.'
)

@section('content')

<section class="page-hero">
    <div class="container page-hero-content">

        <p class="page-eyebrow">
            SERVICES
        </p>

        <h1>
            Des solutions web pensées<br>
            pour <span>votre activité.</span>
        </h1>

        <p class="page-hero-description">
            De la création d'un site vitrine au développement d'une solution
            personnalisée, je vous accompagne avec une approche simple,
            claire et adaptée à vos besoins.
        </p>

    </div>
</section>


<section class="services-detail">
    <div class="container">

        <article class="service-detail">
            <span class="service-number">01</span>

            <div class="service-detail-title">
                <p>PRÉSENTER VOTRE ACTIVITÉ</p>
                <h2>Site vitrine</h2>
            </div>

            <div class="service-detail-content">
                <p>
                    Un site professionnel conçu pour présenter votre activité,
                    vos services et permettre à vos futurs clients de vous
                    trouver facilement.
                </p>

                <ul>
                    <li>Design personnalisé et responsive</li>
                    <li>Optimisation pour mobile</li>
                    <li>Optimisation pour les moteurs de recherche</li>
                    <li>Formulaire de contact</li>
                    <li>Mise en ligne et configuration</li>
                </ul>
            </div>
        </article>


        <article class="service-detail">
            <span class="service-number">02</span>

            <div class="service-detail-title">
                <p>VENDRE EN LIGNE</p>
                <h2>E-commerce</h2>
            </div>

            <div class="service-detail-content">
                <p>
                    Une boutique en ligne moderne et simple à administrer,
                    pensée pour mettre en valeur vos produits et faciliter
                    le parcours de vos clients.
                </p>

                <ul>
                    <li>Catalogue produits</li>
                    <li>Paiement en ligne</li>
                    <li>Gestion des commandes</li>
                    <li>Adaptation mobile</li>
                    <li>Accompagnement à la prise en main</li>
                </ul>
            </div>
        </article>


        <article class="service-detail">
            <span class="service-number">03</span>

            <div class="service-detail-title">
                <p>ALLER PLUS LOIN</p>
                <h2>Développement sur mesure</h2>
            </div>

            <div class="service-detail-content">
                <p>
                    Lorsque votre besoin dépasse le cadre d'un site classique,
                    je développe des fonctionnalités et solutions adaptées
                    au fonctionnement de votre activité.
                </p>

                <ul>
                    <li>Fonctionnalités personnalisées</li>
                    <li>Applications web</li>
                    <li>Interfaces métier</li>
                    <li>Automatisation de certaines tâches</li>
                    <li>Développement web sur mesure</li>
                </ul>
            </div>
        </article>


        <article class="service-detail">
            <span class="service-number">04</span>

            <div class="service-detail-title">
                <p>RESTER SEREIN</p>
                <h2>Maintenance & accompagnement</h2>
            </div>

            <div class="service-detail-content">
                <p>
                    Votre site continue à vivre après sa mise en ligne.
                    Je peux vous accompagner pour assurer son suivi et
                    effectuer les évolutions nécessaires.
                </p>

                <ul>
                    <li>Mises à jour</li>
                    <li>Sauvegardes</li>
                    <li>Corrections techniques</li>
                    <li>Évolutions du contenu</li>
                    <li>Accompagnement</li>
                </ul>
            </div>
        </article>

    </div>
</section>

@endsection