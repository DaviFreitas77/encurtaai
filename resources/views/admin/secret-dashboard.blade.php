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
            <div class="flex w-full flex-col py-12 px-10 max-w-[1920px] ">
                <section>
                    @include('utils.header')
                </section>
                <section>
                    @include('utils.cards-dashboard', [
                    'totalActive' => $totalActive,
                    'totalInactive' => $totalInactive,
                    'totalExpired' => $totalExpired,
                    'totalUsers' => $totalUsers,
                    ])
                </section>
            </div>
        </div>
    </main>


</body>

</html>