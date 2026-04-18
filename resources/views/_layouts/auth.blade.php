<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col h-screen">
    <x-auth.header />
    <div class="grid grid-cols-2">
        @yield('content')
    </div>
</body>

</html>