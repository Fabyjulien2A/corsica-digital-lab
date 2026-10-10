@extends('layouts.app')

@section('title', 'Réalisations web et portfolio | Corsica Digital Lab')

@section(
    'description',
    'Découvrez les réalisations de Corsica Digital Lab : sites e-commerce, applications Laravel, projets web sur mesure et prototypes de sites vitrines en Corse.'
)

@section('content')

<section class="page-hero">
    <div class="container page-hero-content">

        <p class="page-eyebrow">RÉALISATIONS</p>

        <h1>
            Des projets conçus<br>
            pour <span>des besoins concrets.</span>
        </h1>

        <p class="page-hero-description">
            Sites vitrines, e-commerce et concepts web :
            découvrez une sélection de projets et les solutions
            mises en œuvre pour chacun d'eux.
        </p>

    </div>
</section>


<section class="portfolio-page">
    <div class="container">

        {{-- PROJET CLIENT --}}
        <article class="portfolio-featured">

            <div class="portfolio-image">
                <img
                    src="{{ asset('images/amelia-bijoux.jpg') }}"
                    alt="Site e-commerce Amélia Bijoux"
                >

                <span class="portfolio-badge">
                    PROJET CLIENT
                </span>
            </div>

            <div class="portfolio-info">

                <div>
                    <p class="portfolio-type">E-COMMERCE · WORDPRESS</p>

                    <h2>Amélia Bijoux</h2>
                </div>

                <div class="portfolio-description">
                    <p>
                        Création et mise en ligne d'une boutique e-commerce
                        dédiée aux bijoux et pierres naturelles, avec une
                        attention particulière portée à l'expérience mobile
                        et à la présentation des produits.
                    </p>

                    <div class="portfolio-tags">
                        <span>WordPress</span>
                        <span>WooCommerce</span>
                        <span>Responsive</span>
                        <span>E-commerce</span>
                    </div>

                    <a href="https://lemonchiffon-skunk-139014.hostingersite.com/" class="portfolio-link"  target="_blank" rel="noopener noreferrer">
                        Découvrir le projet <span>→</span>
                    </a>
                </div>

            </div>

        </article>

        {{-- SIMPLEDEVIS --}}
<article class="portfolio-featured">

    <div class="portfolio-image">
        <img
            src="{{ asset('images/simpledevis.jpg') }}"
            alt="Application de devis et facturation SimpleDevis"
        >

        <span class="portfolio-badge">
            PROJET LOGICIEL
        </span>
    </div>

    <div class="portfolio-info">

        <div>
            <p class="portfolio-type">
                APPLICATION WEB · SAAS
            </p>

            <h2>SimpleDevis</h2>
        </div>

        <div class="portfolio-description">

            <p>
                Conception et développement d'une application web
                de devis et de facturation pensée pour simplifier
                la gestion quotidienne des artisans et petites entreprises.
            </p>

            <div class="portfolio-tags">
                <span>Laravel</span>
                <span>SaaS</span>
                <span>API</span>
                <span>Facturation</span>
                <span>Responsive</span>
            </div>

            <a href="https://www.simpledevis.online/" class="portfolio-link" target="_blank" rel="noopener noreferrer">
                Découvrir le projet <span>→</span>
            </a>

        </div>

    </div>

</article>

        {{-- PROTOTYPES --}}
        <div class="portfolio-heading">
            <p class="section-eyebrow">CONCEPTS & PROTOTYPES</p>

            <h2>
                Explorer différentes<br>
                <span>identités web.</span>
            </h2>

            <p>
                Des concepts réalisés pour expérimenter différents univers,
                usages et approches graphiques.
            </p>
        </div>


        <div class="portfolio-grid">

            <article class="portfolio-card">

                <div class="portfolio-card-image">
                    <img
                        src="{{ asset('images/vtc-corse.jpg') }}"
                        alt="Prototype de site pour chauffeur VTC"
                    >

                    <span class="portfolio-badge">
                        PROTOTYPE
                    </span>
                </div>

                <div class="portfolio-card-content">
                    <p>SITE VITRINE</p>

                    <h3>VTC Corse</h3>

                    <span>
                        Concept de site moderne pour une activité
                        de transport privé.
                    </span>
                </div>

            </article>


            <article class="portfolio-card">

                <div class="portfolio-card-image">
                    <img
                        src="{{ asset('images/corsica-plomberie.jpg') }}"
                        alt="Prototype de site pour artisan plombier"
                    >

                    <span class="portfolio-badge">
                        PROTOTYPE
                    </span>
                </div>

                <div class="portfolio-card-content">
                    <p>SITE VITRINE</p>

                    <h3>Corsica Plomberie</h3>

                    <span>
                        Concept de site vitrine pensé pour présenter
                        simplement les services d'un artisan local.
                    </span>
                </div>

            </article>

        </div>

    </div>
</section>

@endsections