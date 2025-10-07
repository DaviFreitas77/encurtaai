<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/sidebar.js','resources/js/theme.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="w-full flex flex-col  py-12 px-4 2xl:px-20 overflow-y-auto h-screen scroll-smooth">
        <section class="w-full flex justify-center max-w-[1920px] flex-col">
            <div class="w-full">
                @include('utils.header')
            </div>
        </section>
        <section>
            @include('utils.cards-dashboard', [
            'totalActive' => $totalActive,
            'totalInactive' => $totalInactive,
            'totalExpired' => $totalExpired,
            'totalUsers' => $totalUsers,
            'allUrl' => $allUrl,
            ])
        </section>
    </main>


</body>

</html>