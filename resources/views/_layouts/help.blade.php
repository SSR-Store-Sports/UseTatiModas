<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen overflow-x-hidden bg-linear-to-b from-pink-50/30 to-white">
    <x-help.header />
    <div class="flex-1">
        @yield('content')
    </div>
</body>
</html>