<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex">
    <nav>
        @include('components.sidebar')
    </nav>
    <main>
        <div class="flex-1 p-10">
            <h1 class="text-2xl font-bold">Conteúdo principal</h1>
            <p>Texto ou componentes aqui.</p>
        </div>
    </main>



</body>

</html>