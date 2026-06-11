<!DOCTYPE html>
<html lang="pt-BR" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen overflow-hidden">
    <!-- Loading overlay -->
    <div id="loading-overlay" class="hidden fixed inset-0 z-50 flex flex-col items-center justify-center bg-white/80 backdrop-blur-sm">
        <div class="flex flex-col items-center gap-4">
            <div class="w-12 h-12 rounded-full border-4 border-gray-200 border-t-gold-medium animate-spin"></div>
            <span class="text-sm text-gray-500 font-medium">@lang('enter')...</span>
        </div>
    </div>

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

    <script>
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function() {
                document.getElementById('loading-overlay').classList.remove('hidden');
            });
        });
    </script>
</body>

</html>

