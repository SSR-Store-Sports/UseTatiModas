<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="flex border-b-2 border-t-2 bg-pink-600 border-pink-600 gap-2 justify-center items-center px-4 py-2 ">
        <span class="bg-pink-600 py-2 px-8 rounded-xl text-white text-center font-bold">FRETE GRATÍS</span>
        <span class="bg-pink-600 py-2 px-8 rounded-xl text-white font-bold">ENTREGA GARANTIDA</span>
        <span class="bg-pink-600 py-2 px-8 rounded-xl text-white font-bold">80% OFF</span>
        <span class="bg-pink-600 py-2 px-8 rounded-xl text-white font-bold">10% OFF NO PIX</span>
        <span class="bg-pink-600 py-2 px-8 rounded-xl text-white font-bold">30 DIAS PARA TROCA</span>
    </section>

    <x-header />
    @yield('content')
    <x-footer />
</body>

</html>