<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)]">
    <main class="flex w-full  justify-center h-screen">
        @include('admin.components.sidebar')
        <div class="flex w-full flex-col py-12 px-15 max-w-[1920px]">
            <section>
                @include('admin.components.header')
            </section>
        
        </div>
    </main>


</body>

</html>