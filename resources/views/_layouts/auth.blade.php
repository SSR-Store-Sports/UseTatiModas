<!DOCTYPE html>
<html lang="pt-BR" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen overflow-hidden">
    <div class="h-full flex flex-col">
        <x-auth.header />

        <div class="flex-1 grid grid-cols-1 md:flex md:flex-row overflow-hidden">
            <img 
                class="hidden md:inline h-full w-full object-cover" 
                src="{{ asset('assets/model_login.png') }}"
                alt="Imagem de uma mulher com o cabelo castanho em pé em uma loja, segurando uma bolsa em 
                uma loja de roupas" 
            />
            @yield('content')
        </div>
    </div>
</body>

</html>

