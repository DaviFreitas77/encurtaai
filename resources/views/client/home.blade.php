<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/sidebar.js','resources/js/theme.js','resources/js/form-url.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)]">
    <main class="flex w-full justify-between h-screen">
        @include('utils.sidebar')
        <section class="w-full flex justify-center ">
            <div class="flex w-full flex-col py-12 px-4 xl:px-15 max-w-[1920px] ">
                <div>
                    @include('utils.header')
                </div>
                <div>
                    @include('utils.cards-dashboard', [
                    'activeUrlUser' => $activeUrlUser,
                    'inactiveUrlUser' => $inactiveUrlUser,
                    'expiredUrlUser' => $expiredUrlUser,
                    'allUrlUser' => $allUrlUser
                    ])
                </div>
                <div class="flex justify-center items-center mt-10">
                    @include('utils.create-link')
                </div>

            </div>
        </section>
    </main>
</body>

</html>