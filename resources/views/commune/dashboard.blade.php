@extends('layouts.app') <!-- Utilisation d'une mise en page commune -->

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-sky-600 text-white p-5 space-y-6">
        <h2 class="text-3xl font-semibold">Dashboard</h2>

        <!-- Menu -->
        <ul class="space-y-4">
            <!-- Tableau de bord -->
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="flex items-center space-x-2 p-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-sky-700' : 'hover:bg-sky-700' }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 12h18M3 21h18" />
                    </svg>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <!-- Utilisateurs -->
            <li>
                <a href="{{ route('admin.users') }}"
                   class="flex items-center space-x-2 p-2 rounded {{ request()->routeIs('admin.users') ? 'bg-sky-700' : 'hover:bg-sky-700' }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A6.978 6.978 0 0018 13.084V12h-4v1a6.978 6.978 0 00-3.595 2.511L9 17h6zM12 7a4 4 0 11-.001 8.001A4 4 0 0112 7z" />
                    </svg>
                    <span>Utilisateurs</span>
                </a>
            </li>

            <!-- Paramètres -->
            <li>
                <a href="{{ route('admin.settings') }}"
                   class="flex items-center space-x-2 p-2 rounded {{ request()->routeIs('admin.settings') ? 'bg-sky-700' : 'hover:bg-sky-700' }}">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11V5m0 6l4-4m-4 4l-4-4m10 8H4" />
                    </svg>
                    <span>Paramètres</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="flex-1 p-6">
        <div class="bg-white shadow-lg rounded-lg p-5">
            <h1 class="text-2xl font-semibold mb-4">Tableau de bord de l'Admin</h1>
            <p>Bienvenue sur votre tableau de bord, vous pouvez gérer vos utilisateurs, les paramètres, etc.</p>
        </div>
    </div>
</div>
@endsection
