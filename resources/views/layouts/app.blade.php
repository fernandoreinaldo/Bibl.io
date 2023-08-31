<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-yellow">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        
        <footer class="bg-black">
            <div class="footerUm">
                <div>
                    <p class="bold">
                        <a href="#">Voltar ao início</a>
                    </p>
                </div>
            </div>
            <div class="footerDois">
                <div class="footerGuru">
                    <img src="../images/logoGB.png" alt="logoGB" class="logoGB">
                    <h2>Guru Book</h2>
                </div>
                <div class="icons mx-5">
                    <h3>
                        <i class="bi bi-facebook mx-1"></i>
                        <i class="bi bi-twitter mx-1"></i>
                        <i class="bi bi-instagram mx-1"></i>
                        <i class="bi bi-linkedin mx-1"></i>
                    </h3>
                </div>
            </div>
            <div class="footerTres">
                <div class="atendimento">
                    <h4 class="bold">Atendimento</h4>
                    <p>Política de Vendas, Trocas e Privacidade</p>
                    <p>Termos e Condições de Compra</p>
                    <p>Fale Conosco</p>
                </div>
                <div class="ajuda">
                    <h4 class="bold">Deixe-nos ajudar você</h4>
                    <p>Sua Conta</p>
                    <p>Gerencie seu Conteúdo e Dispositivos</p>
                    <p>Ajuda</p>
                </div>
            </div>
            <div class="footerQuatro">
                <p class="mb-1">Fernando Reinaldo e Maurílio Kobelinski - 2023 ©</p>
            </div>
        </footer>
    </body>
</html>
