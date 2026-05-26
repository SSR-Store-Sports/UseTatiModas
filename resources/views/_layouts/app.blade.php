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
    @yield('content')
    <x-promotions />
    <x-footer />
    <!-- <x-modal.modal-notifications /> -->
    <!-- <x-modal /> -->

    @stack('scripts')
</body>

</html>

