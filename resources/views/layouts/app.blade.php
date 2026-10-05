<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Corsica Digital Lab')</title>
    <meta name="description" content="@yield('description', 'Création de sites web et solutions numériques en Corse.')">

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