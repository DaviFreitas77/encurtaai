<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css',
    'resources/js/theme.js','resources/js/form-url.js','resources/js/modals.js','resources/js/segmentedControl.js','resources/js/generate-qr-code.js','resources/js/fetch-card-analytics.js','resources/js/fetch-urls.js',
    'resources/js/dashboard.js', 'resources/js/redirect.js','resources/js/features-card-url.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="flex w-full justify-between overflow-y-auto h-screen scroll-smooth">
        <section class="w-full flex justify-center ">
            <div class="flex w-full flex-col py-5 px-4 2xl:px-20  max-w-[1920px] ">
                <div>
                    @include('utils.header')
                </div>
                <div id="analyticsContainer">
                    @include('utils.cards-dashboard')
                </div>
                <section>
                    <div class="my-4 relative flex items-center gap-4">

                        <div>
                            <button
                                class="open-modal-create-url bg-[var(--color-secondary)] px-4 py-2 text-sm rounded-md cursor-pointer">
                                Criar link rápido
                            </button>
                        </div>
                    </div>
                    @include('utils.cards-links')
                    <div id="urlContainer" class="grid grid-cols-1  md:grid-cols-2  gap-3 pb-8">
                    </div>

                </section>

                <section class="relative">
                    @include('utils.tab-bar')
                    @include('client.components.modals.modal-create-url')
                </section>
                   @include('client.components.modals.modal-choose-function')
                </div>
            </section>
        </main>
        @include('client.components.modals.modal-QRcode')
        
    <script>
        const appBaseUrl = "{{ url('/') }}";
    </script>
</body>

</html>