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
  

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="max-w-[1920px] mx-auto bg-bg-primary">
    @include('components.header')
    @include('components.modalAuth')
    <main class="flex  items-center flex-col h-screen justify-center">
        <section class="w-full max-w-[1920px] flex justify-between items-center px-10 gap-10">

            <div class="flex flex-col  justify-center gap-5 ">
                <h1 class="text-7xl 2xl:text-9xl font-bold  mt-10  w-full max-w-[700px] 2xl:max-w-[900px] ">
                    Seu link, mais curto & inteligente.
                </h1>
                <p class="max-w-[630px] text-[#ABABAB]">

                    Encurte URLs em segundos, compartilhe com facilidade e monitore cliques em tempo real. Tudo com segurança e QR Code integrado.

                <div class="w-full text-sm">
                    <button class="bg-primary text-white px-4 py-2 rounded-sm hover:bg-blue-600      transition mr-3 cursor-pointer font-medium">
                        Começar Agora
                    </button>
                    <button class="text-primary px-4 py-2 rounded-sm border border-bg-primary cursor-pointer font-medium">
                        Dev API
                    </button>
                </div>
            </div>

            <div class="flex flex-col gap-2 items-end  w-[50%] ">
                <div class="border border-gray-200 p-5 rounded-sm w-full max-w-[500px] 2xl:max-w-[700px] ">
                    <div>
                        <p class="font-medium">Encurtaái</p>
                        <div class="flex items-center gap-2 mt-2 justify-center text-center text-sm font-medium ">
                            <p class="w-full py-2 border border-gray-300 rounded-sm text-gray-500">Encurtar</p>
                            <p class="w-full py-2 border border-primary rounded-sm bg-primary text-white">
                                QR code
                            </p>
                        </div>
                        <input type="text" placeholder="https://www.exemplo.com" class="w-full border border-gray-300 rounded-sm p-2 mt-2 focus:outline-none focus:ring-2 focus:ring-primary" disabled>
                    </div>


                </div>

                <div class="border border-gray-200 p-5 rounded-sm w-full max-w-[500px] 2xl:max-w-[700px] ">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="font-bold ">QR CODE</h2>
                        <button class="bg-primary text-white px-2 py-2 rounded-sm font-medium text-sm">
                            Download
                        </button>
                    </div>
                    <div class="flex items-center gap-5">
                        <img src="image/qrcode.png" alt="QRCODE" class="w-32 h-32">
                        <div class="flex flex-col gap-2 text-sm">
                            <p class="flex items-center gap-2">
                                <!-- Icone de link (Heroicons) -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6.75h2.25A3.75 3.75 0 0120 10.5v3a3.75 3.75 0 01-3.75 3.75h-2.25m-3-10.5H6.75A3.75 3.75 0 003 10.5v3a3.75 3.75 0 003.75 3.75h2.25m0-10.5v10.5" />
                                </svg>
                                https://dfef/encurtaai
                            </p>
                            <p class="flex items-center gap-2">
                                <!-- Icone de calendário (Heroicons) -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 7.5h18M4.5 21h15a1.5 1.5 0 001.5-1.5V7.5a1.5 1.5 0 00-1.5-1.5h-15A1.5 1.5 0 003 7.5v12A1.5 1.5 0 004.5 21z" />
                                </svg>
                                27/05/2023
                            </p>
                            <p class="text-green-900 flex items-center gap-2">
                                <!-- Icone de status ativo (Heroicons check) -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-green-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                                Active
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        @include('components.marquee')



    </main>
</body>

</html>