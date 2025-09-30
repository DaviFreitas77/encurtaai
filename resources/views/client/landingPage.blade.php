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

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/form-url.js','resources/js/redirect.js', 'resources/js/modals.js'])
</head>

<body class="max-w-[1920px] mx-auto bg-bg-primary font-[montserrat]">
    @include('client.components.ui.header')
    @include('client.components.modals.modal-auth')
    @include('client.components.modals.modal-limited-url')

    <main class="flex items-center flex-col">
        <section class="w-full max-w-[1920px] flex flex-wrap md:flex-nowrap justify-center items-center px-6 lg:px-35 gap-10 mt-20">
            <div class="w-full  flex flex-col justify-center items-center mt-2 gap-5">
                <h1 class=" text-2xl  lg:text-4xl  font-bold  w-full text-center text-[#031f39]">
                    Seu link, mais curto & inteligente.
                </h1>
                <p class="max-w-[630px] text-[#ABABAB] text-center text-sm">
                    Transforme seus links longos em URLs curtas, inteligentes e fáceis de compartilhar. Simplifique o acesso e aumente o alcance do seu conteúdo!
                </p>

                <section class="w-full max-w-4xl flex flex-col gap-5  items-center">
                    @include('client.components.forms.form-url')
                </section>


            </div>

        </section>

        @include('client.components.ui.marquee')


        <section class="mt-10 px-6 lg:max-w-[1500px] w-full">
            @include('client.sections.recursos')
        </section>

        <section class="bg-[#EBECFE] w-full rounded-md flex flex-col items-center justify-center mt-20">
            <h1 class="text-center text-4xl font-medium py-10">Controle total sobre cada clique</h1>
            <p class="text-center text-sm max-w-[500px] mb-10">Acompanhe cliques e escaneamentos com facilidade. Meça, entenda e otimize cada interação — tudo em um só lugar, sem complicação.</p>

            <img src="{{ asset('image/sistema.png') }}

        </section>

    </main>
</body>

</html>