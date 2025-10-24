<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css',
    'resources/js/theme.js','resources/js/form-url.js','resources/js/segmentedControl.js','resources/js/generate-qr-code.js','resources/js/dashboard.js','resources/js/features-card-qr'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="flex w-full justify-center overflow-y-auto h-screen scroll-smooth">
        <section class="w-full flex flex-col py-5 px-4 2xl:px-20  max-w-[1920px] gap-5">
            <div class="w-full">
                @include('utils.header',['title' => 'QR Codes'])
            </div>

            <div class="flex gap-2 items-center text-sm ">
                <div class="w-full relative">
                    <input
                        type="text"
                        placeholder="Pesquisar por nome"
                        class="w-full py-4 pl-10 pr-4 rounded-sm bg-[var(--color-secondary)] shadow-sm outline-none text-sm placeholder:text-sm outline-0 " />

                    <svg
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <div class="max-w-30  w-full py-2 shadow-sm rounded-sm px-4 bg-[var(--color-secondary)] flex flex-col ">
                    <span class="text-[10px]">Restantes/mês</span>
                    <p class="text-sm font-medium">4 QR Codes</p>
                </div>

            </div>

            <div class="flex w-full items-center justify-between">
                <button
                    class="open-modal-create-url bg-[var(--color-secondary)] px-4 py-2 text-sm rounded-md cursor-pointer">
                    Cria QR
                </button>
                <div class="flex gap-2">
                    <button class="cursor-pointer hover:opacity-85 bg-[var(--color-secondary)] p-1 shadow-sm rounded-sm">
                        <svg id="icon-grid" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                        </svg>
                    </button>
                    <button class="cursor-pointer hover:opacity-85 bg-[var(--color-secondary)] p-1 shadow-sm rounded-sm">
                        <svg id="icon-list" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                    </button>

                </div>

            </div>
            @include('utils.cards-qrCode')
            <div class="containerQRCodes grid  grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4 pb-20">

            </div>


        </section>
        <section class="relative">
            @include('utils.tab-bar')
            @include('client.components.modals.modal-create-url')
        </section>
        @include('client.components.modals.modal-choose-function')
        @include('client.components.modals.modal-QRcode')

        
    </main>
</body>

</html>