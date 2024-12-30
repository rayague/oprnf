<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset("images/logo1.ico") }}" type="image/x-icon">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar ou en-tête (Header) -->
    <header class="bg-sky-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <div>
                <a href="

                {{-- {{ route('logout') }} --}}

                " class="text-white">Se déconnecter</a>
            </div>
        </div>
    </header>

    <!-- Main container -->
    <div class="flex">


        <!-- Content section -->
        <div class="">
            <!-- Content spécifique à chaque page -->
            @yield('content') <!-- C'est ici que les autres vues viendront insérer leur contenu -->
        </div>
    </div>

    <!-- Footer (si nécessaire) -->
    <footer class="bg-sky-600 text-white text-center p-4 mt-6">
        &copy; 2024 Mon Application
    </footer>

</body>
</html>
