<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/sidebar.js','resources/js/theme.js','resources/js/form-url.js','resources/js/controller-dropdown.js','resources/js/modals.js','resources/js/segmentedControl.js','resources/js/generate-qr-code.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="flex w-full justify-between overflow-y-auto h-screen scroll-smooth">
        <section class="w-full flex justify-center ">
            <div class="flex w-full flex-col py-12 px-4 2xl:px-20  max-w-[1920px] ">
                <div>
                    @include('utils.header')
                </div>
                <section>
                    @include('utils.cards-dashboard', [
                    'activeUrlUser' => $activeUrlUser,
                    'inactiveUrlUser' => $inactiveUrlUser,
                    'expiredUrlUser' => $expiredUrlUser,
                    'allUrlUser' => $allUrlUser
                    ])
                </section>
                <section>
                    <div class="my-4 relative flex items-center gap-4">
                        @include('utils.dropdown', ['orders' => config('arrayOrder.order')])
                        <button id="open-dropdown" class="bg-[var(--color-secondary)] px-4 py-2 text-sm rounded-md cursor-pointer">
                            Ordenar por
                        </button>
                        <div>
                            <button id="open-modal-create-url" class="bg-[var(--color-secondary)] px-4 py-2 text-sm rounded-md cursor-pointer">
                                Cria link
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-3 ">
                        @forelse($currentOrder as $url)
                        @include('utils.cards-links', ['url' => $url])
                        @empty
                        <div>
                            <p class="text-gray-500">Nenhuma URL encontrada.</p>
                        </div>
                        @endforelse
                    </div>

                </section>

                <section class="relative">
                    @include('utils.tab-bar')
                    @include('client.components.modals.modal-create-url')
                </section>

            </div>
        </section>
    </main>
</body>

</html>