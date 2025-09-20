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

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Encurtaái - Seu link, mais curto & inteligente">
    <meta property="og:description" content="Encurte URLs em segundos, compartilhe com facilidade e monitore cliques em tempo real. Tudo com segurança e QR Code integrado.">


    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Encurtaái - Seu link, mais curto & inteligente">
    <meta property="twitter:description" content="Encurte URLs em segundos, compartilhe com facilidade e monitore cliques em tempo real. Tudo com segurança e QR Code integrado.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-[1920px] mx-auto bg-bg-primary font-[montserrat]">
    @include('components.header')
    @include('components.modal-auth')
    <main class="flex items-center flex-col">
        <section class="w-full max-w-[1920px] flex flex-wrap md:flex-nowrap justify-center items-center px-35 gap-10 mt-20">
            <div class="w-full  flex flex-col justify-center items-center mt-2 gap-5">
                <h1 class="text-5xl  font-bold  w-full text-center text-[#031f39]">
                    Seu link, mais curto & inteligente.
                </h1>
                <p class="max-w-[630px] text-[#ABABAB]">
                    Transforme seus links longos em URLs curtas, inteligentes e fáceis de compartilhar. Simplifique o acesso e aumente o alcance do seu conteúdo!
                </p>

                <section class="w-full max-w-4xl flex flex-col gap-5">
                    <form>
                        <input type="text" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-4 rounded-md" required>
                        <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
                            <div class="w-full flex flex-col items-center md:items-start">
                                <p class="text-start w-full max-w-[400px] mb-2 text-gray-600"> Senha(opcional)</p>
                            <input type="text" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-4 rounded-md ">
                            </div>
                           <div class="w-full flex flex-col items-center md:items-start">
                                <p class="text-start w-full max-w-[400px] mb-2 text-gray-600">Caminho personalizado (opcional)</p>
                                <input type="text" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-4 rounded-md ">
                            </div>
                        </div>
                        <button class="bg-primary text-white rounded-md w-full  p-4 mt-5 font-bold cursor-pointer">Criar link curto</button>
                    </form>
                </section>
                <!-- <div class="w-full text-sm">
                    <button class="bg-primary text-white px-4 py-2 rounded-sm hover:bg-blue-600      transition mr-3 cursor-pointer font-medium">
                        Começar Agora
                    </button>
                    <button class="text-primary px-4 py-2 rounded-sm border border-primary cursor-pointer font-medium">
                        Dev API
                    </button>
                </div> -->

            </div>

        </section>

        @include('components.marquee')


        <section class="mt-10 px-35 w-full">
            @include('sections.recursos')
        </section>

        <section class="bg-[#EBECFE] w-full rounded-md flex flex-col items-center justify-center mt-20">
            <h1 class="text-center text-5xl py-10">Controle total sobre cada clique</h1>
            <p class="text-center text-sm max-w-[500px] mb-10">Acompanhe cliques e escaneamentos com facilidade. Meça, entenda e otimize cada interação — tudo em um só lugar, sem complicação.</p>

            <img src="image/sistema.png" alt="">

        </section>

    </main>
</body>

</html>