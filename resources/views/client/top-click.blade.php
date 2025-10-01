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
                    @include('utils.header')
                </section>

                <section class="mt-10 ">
                    <div class="flex flex-col gap-5">
                        @forelse($urls as $url)
                        <div class="bg-[var(--color-secondary)] text-[var(--text-primary)] p-4 rounded-md ">

                            <!-- Header: Link Encurtado -->
                            <div class="flex items-center justify-between mb-2">
                                <a href="{{ url('/r/' . $url['slug']) }}"
                                    target="_blank"
                                    class="text-blue-600 hover:underline font-semibold break-all text-sm sm:text-base">
                                    {{ url('/r/' . $url['slug']) }}
                                </a>
                            </div>

                            <!-- URL Original -->
                            <p class="text-xs text-gray-500 break-words">
                                {{ $url['url_original'] }}
                            </p>

                            <!-- Informações Adicionais -->
                            <div class="flex flex-wrap items-center gap-4 mt-3 text-sm text-gray-700">

                                <!-- Status -->
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>{{ $url['status'] }}</span>
                                </div>

                                <!-- Data -->
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>
                                        {{ date('d', strtotime($url['created_at'])) }}/
                                        {{ config('month.data')[ltrim(date('m', strtotime($url['created_at'])), '0')] }}
                                    </span>
                                </div>

                                <!-- Cliques -->
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 16h-1v-4h-1m0-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                                    </svg>
                                    <span>{{ $url['click_count'] }} cliques</span>
                                </div>

                            </div>
                        </div>
                        @empty
                        <div>
                            <p class="text-gray-500">Nenhuma URL encontrada.</p>
                        </div>
                        @endforelse
                    </div>

                </section>
            </div>
        </div>
    </main>


</body>

</html>