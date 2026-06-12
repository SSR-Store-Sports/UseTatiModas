<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/logo-tatiusemodas.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden min-h-screen flex flex-col">
    <x-promotions />
    <x-header />
    <div class="flex-1">
        @yield('content')
    </div>
    <x-promotions />
    <x-footer />

    <!-- utilização de toasts na plataforma para operações, avisa dá um feedback pro usuário  -->
    <x-toast />
    <x-confirm-delete-modal />
    <x-notification-modal />
    <x-scroll-restore />

    @stack('scripts')
</body>

</html>
