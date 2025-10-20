<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/theme.js','resources/js/modals.js','resources/js/segmentedControl.js','resources/js/generate-qr-code.js','resources/js/openCampaignSection.js','resources/js/form-url.js'])
    <title>Document</title>
</head>

<body class="bg-[var(--color-background)] text-[var(--text-primary)] flex justify-center items-center">
    @include('utils.sidebar')
    <form method="POST" class="form_shortened_url flex w-full  overflow-y-auto h-screen scroll-smooth flex-col   py-5 px-4 2xl:px-20 items-center">
        @csrf
        <section class="w-full">
            @include('utils.header',['title'=> 'Novo link'])
        </section>

        <section class="flex w-full justify-center items-center mt-20">
            <div class="bg-[var(--color-secondary)] max-w-5xl w-full p-10 rounded-md">
                <div>
                    <p class="font-medium text-xl mb-1">Gerencie seu link facilmente</p>
                    <p class="text-sm">
                        2 de 3 links usados este mês
                        <span class="underline">Atualize para mais</span>
                    </p>
                </div>

                <div class="mt-10 flex flex-col gap-4">
                    <div>
                        <p class="font-medium mb-2">Link longo</p>
                        <input type="text" placeholder="https://exemplo.com/link-longo" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="url_original">
                           <p data-error-for="url_original" class="text-red-500 text-sm mt-1 text-start"></p>
                    </div>

                    <div class="flex flex-col md:flex-row items-center w-full gap-2">
                        <div class="w-full">
                            <p class="font-medium mb-2">Nome do link (Opcional)</p>
                            <input type="text" placeholder="ex: Redes sociais" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="name_url">
                              <p data-error-for="name_url" class="text-red-500 text-sm mt-1 text-start"></p>
                        </div>
                        <div class="w-full">
                            <p class="font-medium mb-2">Personalize seu link</p>
                            <input type="text" placeholder="ex: minhas-redes" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="slug">
                            <p data-error-for="slug" class="text-red-500 text-sm mt-1 text-start"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Botão para abrir campanha -->
        <div class="flex j mt-2 w-full max-w-5xl openCampaignSection items-center">
            <div class="flex items-center gap-2 text-sm text-[var(--color-primary)] cursor-pointer transition hover:opacity-85 ">
                <p class="font-medium">Personalize seu link</p>
                <svg class="svg-accordion-bottom" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg class="svg-accordion-top hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 14L12 9L7 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Section da campanha -->
        <section class="sectionCreateCampaign w-full flex justify-center items-center mt-5 opacity-0 transition-all duration-200 pb-20">
            <div class="bg-[var(--color-secondary)] max-w-5xl w-full p-10 rounded-md">
                <div>
                    <p class="font-medium text-xl mb-1">Personalize seu link</p>
                    <p class="text-sm">
                        2 de 3 personalizações criadas este mês
                        <span class="underline">Atualize para mais</span>
                    </p>
                </div>

                <div class="mt-10 flex flex-col gap-4">
                    <div>
                        <p class="font-medium mb-2">Limitar quantidade de acessos</p>
                        <input type="number" placeholder="ex: 40 Acessos" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="limited_clicks">
                        <p data-error-for="limited_clicks" class="text-red-500 text-sm mt-1 text-start"></p>
                    </div>

                    <div class="flex flex-col md:flex-row items-center w-full gap-2">
                        <div class="w-full">
                            <p class="font-medium mb-2">liberar o acesso</p>
                            <input type="date" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="start_date">
                            <p data-error-for="start_date" class="text-red-500 text-sm mt-1 text-start"></p>
                        </div>
                        <div class="w-full">
                            <p class="font-medium mb-2">Data de expiração</p>
                            <input type="datetime-local" class="w-full border p-2 border-[var(--color-background)] outline-0 rounded-md" name="expiration_date">
                            <p data-error-for="expiration_date" class="text-red-500 text-sm mt-1 text-start"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-[var(--color-primary)] fixed bottom-2 w-full py-2 px-4 2xl:px-20 max-w-5xl rounded-md flex justify-between items-center">
            <button class="submit-form bg-white h-12 px-10 rounded-md cursor-pointer hover:opacity-85 text-black ">Criar link curto</button>
            <button class="text-white cursor-pointer hover:opacity-85">Cancelar</button>
        </div>
    </form>

    @include('client.components.modals.modal-choose-function')
</body>

</html>