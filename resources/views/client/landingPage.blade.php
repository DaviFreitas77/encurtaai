<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Encurtaái - Seu link, mais curto & inteligente</title>
    <meta name="description" content="Encurte URLs em segundos, compartilhe com facilidade e monitore cliques em tempo real. Tudo com segurança e QR Code integrado.">
    <meta name="keywords" content="encurtador de link, encurtador de url, qr code, link curto, url curta, monitorar cliques, api de encurtamento">
    <meta name="author" content="Encurtaái">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/form-url.js','resources/js/redirect.js', 'resources/js/modals.js','resources/js/toaster.js'])
</head>

<body class="max-w-[1920px] mx-auto font-[montserrat] ">
    @include('client.components.ui.header')
    @include('client.components.modals.modal-auth')
    @include('client.components.modals.modal-limited-url')

    <main class="flex items-center flex-col">


        <div class="grid-wrapper relative">
            <div class="grid-background"></div>
        </div>

        <section class="w-full max-w-[1920px] flex flex-wrap md:flex-nowrap justify-center items-center px-6 lg:px-35 gap-10 mt-20 absolute">
            <div class="w-full  flex flex-col justify-center items-center mt-2 gap-5">
                <div class="flex items-center gap-2">
                    @include('client.components.ui.groupAvatar')
                    <p class="text-sm text-gray-500">+5000 links criados</p>
                </div>

                <h1 class="shine-text text-4xl lg:text-5xl   font-bold  w-full text-center">
                    Seu link, mais curto & inteligente.
                </h1>
                <p class="max-w-[630px] text-[#031f39] font-medium  text-center text-sm">
                    Transforme seus links longos em URLs curtas, inteligentes e fáceis de compartilhar. Simplifique o acesso e aumente o alcance do seu conteúdo!
                </p>


                <section class="w-full max-w-4xl flex flex-col gap-5  items-center">
                    @include('client.components.forms.form-url')
                </section>

            </div>

        </section>

        <section class=" mt-40 2xl:mt-20 w-full">@include('client.components.ui.marquee')</section>


        <section class="mt-10 px-6 lg:max-w-[1400px] w-full">
            @include('client.sections.recursos')
        </section>

        <section class="bg-[#EBECFE] w-full rounded-md flex flex-col items-center justify-center mt-20">
            <h1 class="text-center text-4xl font-medium pt-10">Controle total sobre cada clique</h1>
            <p class="text-center text-sm max-w-[500px] mb-10 mt-2">Acompanhe cliques e escaneamentos com facilidade. Meça, entenda e otimize cada interação — tudo em um só lugar, sem complicação.</p>

            <img src="{{ asset('image/sistemaDark.png') }}" alt="Imagem do sistema" class="w-full max-w-6xl mx-auto rounded-md shadow-md">


        </section>

    </main>
    <div id="toaster"
        class="fixed top-6 right-6 z-50 flex flex-col gap-3 pointer-events-none">
    </div>



</body>


</html>