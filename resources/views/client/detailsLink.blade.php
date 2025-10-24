<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css',
    'resources/js/theme.js','resources/js/grafics.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="flex flex-col w-full  overflow-y-auto h-screen scroll-smooth py-10  px-4 2xl:px-20">
        <section class="w-full flex flex-col py-5  max-w-[1920px] gap-5">
            <div class="w-full">
                @include('utils.header',['title' => 'Detalhes do seu link'])
            </div>
        </section>

        <section class="flex flex-col items-center justify-center mt-10 gap-10">
            <div class="p-4 bg-[var(--color-secondary)] rounded-lg w-full max-w-[1500px] h-84">
                <h1 class="font-bold text-lg mb-4">Países</h1>
                <canvas id="myChartCountries" class="w-full h-full"></canvas>
            </div>

              <div class="p-4 bg-[var(--color-secondary)] rounded-lg w-full max-w-[1500px] h-84">
                <h1 class="font-bold text-lg mb-4">Clicks por hora</h1>
                <canvas id="myChartHrs" class="w-full h-full"></canvas>
            </div>
           
        </section>

        <section class="flex flex-wrap md:flex-nowrap justify-center mt-10 gap-5">
            <div class="p-4 bg-[var(--color-secondary)] rounded-lg w-full max-w-[740px] h-84">
                <h1 class="font-bold text-lg ">Navegadores</h1>
                <canvas id="myChartBrowsers" class="w-full h-full"></canvas>
            </div>
             <div class="p-4 bg-[var(--color-secondary)] rounded-lg w-full max-w-[740px] h-84">
                <h1 class="font-bold text-lg ">Dispositivos</h1>
                <canvas id="myChart" class="w-full h-full"></canvas>
            </div>
        </section>


    </main>
</body>

</html>