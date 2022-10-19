<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="flex max-w-7xl mx-auto sm:px-8 lg:px-8">
                    <!-- sidebar navigation -->
                    {{-- <div class="flex px-3 py-2 flex-col min-h-screen max-w-lg bg-white shadow-lg space-y-5 p-4">
                        <a href="{{ route('medications.index') }}" active="{{ request()->routeIs('medications.index') }}">{{ __('Medicaments') }}</a>
                        <a href="{{ route('cashiers.index') }}" active="{{ request()->routeIs('cashiers.index') }}">{{ __('Caissiers') }}</a>
                        <a href="{{ route('categories.index') }}" active="{{ request()->routeIs('categories.index') }}">{{ __('categories') }}</a>
                        <a href="{{ route('ordereds.index') }}" active="{{ request()->routeIs('ordereds.index') }}">{{ __('Commandes') }}</a>
                        <a href="{{ route('patients.index') }}" active="{{ request()->routeIs('patients.index') }}">{{ __('Patients') }}
                        </a><a href="{{ route('parmacists.index') }}" active="{{ request()->routeIs('parmacists.index') }}">{{ __('Parmacistes') }}</a>
                    </div> --}}


                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
