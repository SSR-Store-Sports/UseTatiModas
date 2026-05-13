<!DOCTYPE html>
<html lang="pt-BR" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full flex flex-col">
    <x-auth.header />
    <div class="grid grid-cols-1 md:grid-cols-2 flex-1 min-h-0">
        @yield('content')
    </div>
</body>

</html>