
@extends('layouts.app')

@section('title', 'À propos | Corsica Digital Lab')

@section('description', 'Découvrez Corsica Digital Lab, une activité indépendante de création de sites web et de développement de solutions numériques en Corse.')

@section('content')

<section class="page-hero">
    <div class="container page-hero-content">

        <p class="page-eyebrow">À PROPOS</p>

        <h1>
            Derrière chaque projet,<br>
            <span>une approche humaine.</span>
        </h1>

        <p class="page-hero-description">
            Un accompagnement de proximité, des solutions adaptées
            et une passion pour le développement web.
        </p>

    </div>
</section>

<section class="about-page">
    <div class="container">

        <div class="about-intro">

            <div class="about-intro-heading">
                <p class="section-eyebrow">QUI SUIS-JE ?</p>

                <h2>
                    Un développeur indépendant
                    <span>à votre écoute.</span>
                </h2>
            </div>

            <div class="about-intro-text">
                <p>
                    Je suis Julien, développeur web diplômé et
                    fondateur de Corsica Digital Lab, une activité
                    indépendante basée en Corse.
                </p>

                <p>
                    J'accompagne les artisans, indépendants et petites
                    entreprises dans la création de sites internet
                    et de solutions numériques adaptées à leurs besoins.
                </p>

                <p>
                    Mon objectif est simple : proposer des solutions
                    modernes, efficaces et faciles à utiliser,
                    avec un interlocuteur unique tout au long du projet.
                </p>
            </div>

        </div>

        <div class="about-statement">
            <p class="section-eyebrow">MA PHILOSOPHIE</p>

            <h2>
                La technologie doit
                <span>simplifier votre quotidien,</span>
                pas le compliquer.
            </h2>
        </div>

        <div class="about-values">

            <article class="about-value">
                <span>01</span>
                <h3>Proximité</h3>
                <p>
                    Un échange direct et un accompagnement personnalisé,
                    de la première idée à la mise en ligne.
                </p>
            </article>

            <article class="about-value">
                <span>02</span>
                <h3>Transparence</h3>
                <p>
                    Des explications claires, des choix adaptés
                    et une communication simple à chaque étape.
                </p>
            </article>

            <article class="about-value">
                <span>03</span>
                <h3>Sur mesure</h3>
                <p>
                    Chaque projet est différent. Les solutions sont
                    pensées en fonction de vos besoins réels.
                </p>
            </article>

        </div>

        <div class="about-skills">

            <div>
                <p class="section-eyebrow">SAVOIR-FAIRE</p>

                <h2>
                    De la création web
                    <span>au développement logiciel.</span>
                </h2>
            </div>

            <div class="about-skills-content">
                <p>
                    Sites vitrines, boutiques en ligne, applications
                    web et fonctionnalités personnalisées : je mobilise
                    les technologies adaptées à chaque projet.
                </p>

                <div class="about-tech">
                    <span>HTML / CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>WordPress</span>
                    <span>WooCommerce</span>
                    <span>MySQL</span>
                </div>
            </div>

        </div>

        <div class="about-cta">
            <p class="section-eyebrow">TRAVAILLONS ENSEMBLE</p>

            <h2>
                Et si nous parlions
                <span>de votre projet ?</span>
            </h2>

            <p>
                Une idée, un besoin ou simplement une question ?
                Échangeons sur la solution qui vous conviendrait.
            </p>

            <a href="{{ route('contact') }}" class="btn-primary">
    Discuter de votre projet →
</a>

        </div>

    </div>
</section>

@endsection
