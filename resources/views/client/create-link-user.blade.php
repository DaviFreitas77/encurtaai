<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encurtaái-crie seu link</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/js/redirect.js', 'resources/js/modals.js','resources/js/theme.js','resources/js/sidebar.js','resources/js/form-url.js','resources/js/segmentedControl.js','resources/js/generate-qr-code.js'])
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex">
    @include('utils.sidebar')
    <main class="w-full flex flex-col  py-12 px-4 2xl:px-20 overflow-y-auto h-screen scroll-smooth">
        <section class="flex w-full flex-col  max-w-[1920px] ">
            <div>
                @include('utils.header',['title'=> 'Criar link'])
            </div>
        </section>

        <section class="w-full mt-15 flex items-center justify-center ">
            <div class="w-full max-w-4xl flex flex-col items-center text-center gap-5 ">
                <h1 class="text-4xl font-bold">Links inteligentes, controle total.</h1>
                <p class="max-w-xl text-lg text-[var(--text-secondary)] mb-10">Crie links curtos e QR Codes que trabalham para você.</p>

                <section class="w-full max-w-4xl flex flex-col gap-5  items-center">
                    @include('client.components.forms.form-url')
                </section>
            </div>
        </section>


        <section>
            <div class="w-full mx-auto overflow-hidden bg-gray-800 rounded-lg shadow-md mt-15">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-300">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Slug</th>
                                <th scope="col" class="px-6 py-3">Link Original</th>
                                <th scope="col" class="px-6 py-3 text-center">QR Code</th>
                                <th scope="col" class="px-6 py-3 text-center">Cliques</th>
                                <th scope="col" class="px-6 py-3 text-center">Status</th>

                                <th scope="col" class="px-6 py-3">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($latestUrls as $url)
                            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">

                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                    {{ $url->slug }}
                                </th>


                                <td class="px-6 py-4 truncate max-w-xs" title="https://link-original-completo.com/etc">
                                    {{ $url->url_original }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <button class="p-1.5 rounded-md hover:bg-gray-700" title="Ver QR Code">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.5A.75.75 0 014.5 3.75h15a.75.75 0 01.75.75v15a.75.75 0 01-.75.75h-15a.75.75 0 01-.75-.75v-15zM9 8.25h6v6H9v-6zM4.5 9.75v4.5M19.5 9.75v4.5M9.75 4.5v4.5M14.25 4.5v4.5M9.75 15v4.5M14.25 15v4.5" />
                                        </svg>
                                    </button>
                                </td>

                                <td class="px-6 py-4 text-center font-mono">
                                    {{ $url->click_count }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <span class="px-2 py-1 text-xs font-medium text-green-300 bg-green-900 rounded-full">{{ $url->status }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $url->created_at->format('d/m/Y') }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="px-6 py-8 text-center text-gray-400">
                                    Você ainda não criou nenhum link.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>
    <section class="relative">
        @include('utils.tab-bar')
    </section>
</body>

</html>