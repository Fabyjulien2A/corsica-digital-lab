<header class="site-header">
    <div class="container header-inner">

        <a href="{{ route('home') }}" class="brand">
            <span class="brand-logo">CDL</span>
            <span class="brand-name">CORSICA DIGITAL LAB</span>
        </a>

        <nav class="main-nav" id="main-navigation" aria-label="Navigation principale">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('realisations') }}">Réalisations</a>
            <a href="{{ route('about') }}">À propos</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <a href="{{ route('contact') }}" class="header-cta">
            Un projet ? <span>→</span>
        </a>

        <!-- Bouton burger mobile -->
        <button
            type="button"
            class="menu-toggle"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
            aria-controls="main-navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>
