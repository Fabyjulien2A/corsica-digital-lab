
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO principal --}}
    <title>@yield('title', 'Corsica Digital Lab | Création de sites web en Corse')</title>

    <meta
        name="description"
        content="@yield('description', 'Corsica Digital Lab accompagne les artisans, indépendants et entreprises dans la création de sites web et de solutions numériques en Corse.')"
    >

    <meta name="robots" content="index, follow">

    {{-- URL canonique --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph : partage sur les réseaux sociaux --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Corsica Digital Lab">

    <meta property="og:title" content="@yield('title', 'Corsica Digital Lab | Création de sites web en Corse')">

    <meta
        property="og:description"
        content="@yield('description', 'Création de sites web, e-commerce et solutions numériques sur mesure en Corse.')"
    >

    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="@yield('title', 'Corsica Digital Lab | Création de sites web en Corse')">

    <meta
        name="twitter:description"
        content="@yield('description', 'Création de sites web et solutions numériques en Corse.')"
    >

    {{-- Assets Laravel --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
