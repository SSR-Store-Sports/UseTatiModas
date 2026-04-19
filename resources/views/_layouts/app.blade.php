<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-promotions />
    <x-header />
    @yield('content')
    <x-promotions />
    <x-footer />
    <!-- <x-modal.modal-notifications /> -->
    <!-- <x-modal /> -->
</body>

</html>