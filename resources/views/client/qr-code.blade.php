<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/sidebar.js','resources/js/theme.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)]">
    <main class="flex w-full  justify-between h-screen">
        @include('utils.sidebar')
        <div class="w-full flex justify-center ">
            <div class="flex w-full flex-col py-12 px-4 xl:px-15 max-w-[1920px] ">
                <section>
                    @include('utils.header',['title'=> 'Meus QR'])
                </section>

                <section class="mt-10 ">
                    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-5 ">
                        @forelse($urls as $url)
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
                </section>
            </div>
        </div>
    </main>


</body>

</html>