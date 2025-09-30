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
            <div class="flex w-full flex-col py-12 px-15 max-w-[1920px] ">
                <section>
                    @include('utils.header')
                </section>

                <section class="mt-8 ">

                    <div class=" rounded-lg overflow-hidden ">
                        <table class="w-full text-sm text-left ">
                            <thead class="text-xs  uppercase ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">URL Original</th>
                                    <th scope="col" class="px-6 py-3">URL Encurtada</th>
                                    <th scope="col" class="px-6 py-3">Slug</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Cliques</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($urls as $url)

                                <tr class="border-b border-gray-700">
                                    <td class="px-6 py-4 font-medium whitespace-nowrap truncate max-w-xs">{{ $url['url_original'] }}</td>
                                    <td class="px-6 py-4 "><a href="{{ url('/r/' . $url['slug']) }}" target="_blank" class="text-blue-400 hover:underline">{{ url('/r/' . $url['slug']) }}</a></td>
                                    <td class="px-6 py-4 ">{{ $url['slug'] }}</td>
                                    <td class="px-6 py-4 ">{{ $url['status'] }}</td>
                                    <td class="px-6 py-4 ">{{ $url['click_count'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4">Nenhuma URL encontrada.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </main>


</body>

</html>