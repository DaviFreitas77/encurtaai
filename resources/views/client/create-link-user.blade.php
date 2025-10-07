<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/sidebar.js','resources/js/theme.js','resources/js/form-url.js','resources/js/controller-dropdown.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="w-full flex justify-center">
        <section class="flex w-full flex-col py-12 px-4 2xl:px-20  max-w-[1920px] ">
            <div>
                @include('utils.header')
            </div>
            <section>

            </section>
        </section>
    </main>



</body>

</html>