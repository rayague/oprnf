<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-sky-600 text-white p-5 space-y-6 fixed md:relative inset-y-0 left-0 z-10 transform md:transform-none transition-all duration-300 ease-in-out"
        :class="{ '-translate-x-full': !sidebarOpen }">
        <h2 class="text-3xl font-semibold">Dashboard</h2>

        <!-- Menu -->
        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center space-x-2 hover:bg-sky-700 p-2 rounded">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 12h18M3 21h18" />
                    </svg>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 hover:bg-sky-700 p-2 rounded">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l4 2M6 6h12M6 18h12" />
                    </svg>
                    <span>Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center space-x-2 hover:bg-sky-700 p-2 rounded">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l4 2M6 6h12M6 18h12" />
                    </svg>
                    <span>Paramètres</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="flex-1 p-6 md:ml-64">
        <div class="bg-white shadow-lg rounded-lg p-5">
            <h1 class="text-2xl font-semibold mb-4">Tableau de bord de l'Admin</h1>
            <p>Bienvenue sur votre tableau de bord, vous pouvez gérer vos utilisateurs, les paramètres, etc.</p>
        </div>
    </div>

    <!-- Menu Hamburger pour mobile -->
    <button class="md:hidden p-4" @click="sidebarOpen = !sidebarOpen">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>
@endsection
