<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <!-- Webchat Styles -->
        <link rel="stylesheet" href="{{ mix('css/webchat.css') }}">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
