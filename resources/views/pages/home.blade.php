@extends('layouts.app')

@section('title', 'Création de sites internet en Corse | Corsica Digital Lab')

@section(
    'description',
    'Corsica Digital Lab crée des sites vitrines, boutiques e-commerce et solutions web sur mesure pour les artisans, indépendants et entreprises en Corse.'
)

@section('content')

<section
    class="hero"
    style="background-image: url('{{ asset('images/hero-corse.jpg') }}');"
>

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <p class="hero-eyebrow">
            CRÉATION WEB & SOLUTIONS NUMÉRIQUES
        </p>

        <h1>
            Des sites web qui<br>
            font avancer<br>
            <span>votre activité</span>
        </h1>

        <p class="hero-description">
            Sites vitrines, e-commerce, développement sur mesure
            et maintenance, pour les professionnels en Corse
            et partout en France.
        </p>

        <div class="hero-actions">

            <a href="{{ route('contact') }}" class="btn btn-primary">
                Discuter de votre projet
                <span>→</span>
            </a>

            <a href="{{ route('realisations') }}" class="btn btn-outline">
                Voir mes réalisations
            </a>

        </div>

    </div>

</section>

<section class="services-section">
    <div class="container">

        <div class="section-heading">
            <div>
                <h2>
                    Des solutions adaptées<br>
                    à <span>votre activité</span>
                </h2>
            </div>

            <p class="section-intro">
                Un accompagnement complet, de la création à la mise en ligne,
                pour des sites performants, modernes et simples à gérer.
            </p>
        </div>

        <div class="services-grid">

            <article class="service-card">
                <div class="service-icon">&lt;/&gt;</div>

                <h3>Sites vitrines</h3>

                <p>
                    Des sites modernes et efficaces pour présenter votre activité
                    et attirer de nouveaux clients.
                </p>

                <a href="{{ route('services') }}">
                    Découvrir <span>→</span>
                </a>
            </article>

            <article class="service-card">
                <div class="service-icon">◇</div>

                <h3>E-commerce</h3>

                <p>
                    Des boutiques en ligne fiables, élégantes et simples à gérer
                    pour développer vos ventes.
                </p>

                <a href="{{ route('services') }}">
                    Découvrir <span>→</span>
                </a>
            </article>

            <article class="service-card">
                <div class="service-icon">{ }</div>

                <h3>Développement sur mesure</h3>

                <p>
                    Des solutions numériques adaptées aux besoins spécifiques
                    de votre activité.
                </p>

                <a href="{{ route('services') }}">
                    Découvrir <span>→</span>
                </a>
            </article>

            <article class="service-card">
                <div class="service-icon">↻</div>

                <h3>Maintenance & accompagnement</h3>

                <p>
                    Un suivi régulier pour garder votre site sécurisé,
                    performant et toujours à jour.
                </p>

                <a href="{{ route('contact') }}">
                    Découvrir <span>→</span>
                </a>
            </article>

        </div>

    </div>
</section>


<section class="projects-section">
    <div class="container">

        <div class="projects-heading">
            <div>
                <p class="section-eyebrow projects-eyebrow">
                    RÉALISATIONS
                </p>

                <h2>
                    Des projets concrets<br>
                    pour <span>des professionnels</span>
                </h2>
            </div>

            <a href="{{ route('realisations') }}" class="projects-all">
                Voir toutes les réalisations <span>→</span>
            </a>
        </div>

        <div class="projects-grid">

            <article class="project-card project-card-large">

                <div class="project-image">
                    <img
                        src="{{ asset('images/realisations/amelia-bijoux.jpg') }}"
                        alt="Site e-commerce Amélia Bijoux"
                    >

                    <span class="project-type">E-COMMERCE</span>
                </div>

                <div class="project-info">
                    <div>
                        <h3>Amélia Bijoux</h3>
                        <p>
                            Boutique en ligne de bijoux et pierres naturelles.
                        </p>
                    </div>

                    <span class="project-arrow">↗</span>
                </div>

            </article>


            <article class="project-card">

                <div class="project-image">
                    <img
                        src="{{ asset('images/realisations/vtc-corse.jpg') }}"
                        alt="Prototype de site pour chauffeur VTC"
                    >

                    <span class="project-type">SITE VITRINE</span>
                </div>

                <div class="project-info">
                    <div>
                        <h3>VTC Corse</h3>
                        <p>
                            Prototype d'un site moderne pour chauffeur privé.
                        </p>
                    </div>

                    <span class="project-arrow">↗</span>
                </div>

            </article>


            <article class="project-card">

                <div class="project-image">
                    <img
                        src="{{ asset('images/realisations/plomberie.jpg') }}"
                        alt="Prototype de site pour artisan plombier"
                    >

                    <span class="project-type">SITE VITRINE</span>
                </div>

                <div class="project-info">
                    <div>
                        <h3>Corsica Plomberie</h3>
                        <p>
                            Prototype de site vitrine pour un artisan local.
                        </p>
                    </div>

                    <span class="project-arrow">↗</span>
                </div>

            </article>

        </div>

    </div>
</section>

<section class="about-section">
    <div class="container">

        <div class="about-grid">

            <div class="about-content">
                <h2>
                    Du web pensé pour<br>
                    <span>les petites entreprises.</span>
                </h2>

                <div class="about-text">
                    <p>
                        J'accompagne artisans, indépendants et petites entreprises
                        dans la création de leur présence en ligne, avec des solutions
                        modernes, efficaces et adaptées à leurs besoins.
                    </p>

                    <p>
                        De la conception à la mise en ligne, vous bénéficiez d'un
                        interlocuteur unique pour donner vie à votre projet.
                    </p>
                </div>

                <a href="#" class="about-link">
                    Découvrir Corsica Digital Lab <span>→</span>
                </a>
            </div>

            <div class="about-visual">
                <div class="about-monogram">
                    <span>CDL</span>
                    <small>CORSICA DIGITAL LAB</small>
                </div>

                <p>CRÉATION WEB<br>& SOLUTIONS NUMÉRIQUES</p>
            </div>

        </div>

        <div class="about-values">

            <div class="about-value">
                <span>01</span>
                <div>
                    <h3>Sur mesure</h3>
                    <p>Des solutions pensées selon votre activité et vos besoins.</p>
                </div>
            </div>

            <div class="about-value">
                <span>02</span>
                <div>
                    <h3>Proximité</h3>
                    <p>Un interlocuteur unique tout au long de votre projet.</p>
                </div>
            </div>

            <div class="about-value">
                <span>03</span>
                <div>
                    <h3>Simplicité</h3>
                    <p>Des solutions claires et simples à utiliser au quotidien.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="final-cta">
    <div class="container final-cta-inner">

        <div>
            <p class="final-cta-eyebrow">UN PROJET ?</p>

            <h2>
                Un projet en tête ?<br>
                <span>Parlons-en.</span>
            </h2>
        </div>

        <div class="final-cta-content">
            <p>
                Site vitrine, boutique en ligne ou développement sur mesure :
                échangeons sur votre projet et trouvons ensemble la solution
                adaptée à votre activité.
            </p>

            <a href="#" class="final-cta-button">
                Parler de mon projet
                <span>→</span>
            </a>
        </div>

    </div>
</section>

@endsection