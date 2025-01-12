<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OPRNF</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/logo1.ico') }}" type="image/x-icon">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-200">

    <!-- Container -->
    <div class="flex items-center justify-center min-h-screen">

        <!-- Form Card -->
        <div class="w-full sm:w-96 bg-white p-8 rounded-lg shadow-lg">

            <!-- Logo -->
            <div class="text-center mb-8">
                <img src="{{ asset('images/logo5.png') }}" class="w-32 mx-auto" alt="Logo">
            </div>

            <!-- Success or Error Message -->
            @if (session('status'))
                <div class="bg-green-100 text-green-600 p-4 rounded-md mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input id="password" name="password" type="password" required
                        class="w-full mt-1 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-sky-500"
                        placeholder="Entrez votre mot de passe">
                    @error('password')
                        <div class="text-red-600 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" name="remember" class="mr-2 rounded">
                    <label for="remember_me" class="text-sm text-gray-600">Se souvenir de moi</label>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between mb-4">
                    <button type="submit"
                        class="w-full bg-sky-600 text-white font-bold py-3 px-4 rounded-md hover:bg-sky-700 focus:ring-2 focus:ring-sky-500">
                        Se connecter
                    </button>
                </div>

                <!-- Forgot Password Link -->
                {{-- <div class="text-center text-sm">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sky-600 hover:text-sky-700">Mot de passe
                            oublié ?</a>
                    @endif
                </div> --}}
            </form>
        </div>
    </div>
</body>


</html>
