<header class="site-header">
    <div class="container header-inner">

        <a href="{{ route('home') }}" class="brand">
            <span class="brand-logo">CDL</span>
            <span class="brand-name">CORSICA DIGITAL LAB</span>
        </a>

        <nav class="main-nav">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('realisations') }}">Réalisations</a>
            <a href="{{ route('about') }}">À propos</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <a href="{{ route('contact') }}" class="header-cta">
            Un projet ? <span>→</span>
        </a>

    </div>
</header>