<form method="POST" id="form_shortened_url" class=" w-full max-w-[700px] text-sm">
    @csrf

    <div id="div-link-shortened"
        class="w-full my-4 border border-green-200  bg-green-50 hidden justify-center items-center rounded-md  ">
        <a id="link_shortened" target="_blank"
            class="w-full hidden min-w-[700px] p-3 text-center text-black font-medium rounded-md"></a>
    </div>

    <div id="segmented-control" class="flex w-full max-w-xs p-1 mx-auto space-x-1 bg-gray-200 rounded-full my-8">

        <button id="choice-shoterned-url" type="button"
            class="w-full px-4 py-2 text-sm font-semibold text-white  bg-[var(--color-primary)] rounded-full focus:outline-none">
            Encurtar link
        </button>

        @auth
        <button id="choice-qr-code" type="button"
            class="w-full px-4 py-2 text-sm font-semibold text-gray-500 rounded-full  focus:outline-none">
            Gerar QR Code
        </button>
        @else
        <button disabled type="button" title="Faça login para gerar QR Codes"
            class="w-full px-4 py-2 text-sm font-semibold text-gray-400 bg-gray-100 rounded-full focus:outline-none disabled:cursor-not-allowed disabled:opacity-75"
            aria-selected="false">
            Gerar QR Code
        </button>
        @endauth

    </div>
    <section id="section-form-url">
        <div>
            <p class="mb-2 text-start">Encurte seu link longo</p>
            <input type="text" name="url_original" placeholder="Cole sua URL aqui..."
                class="outline-none w-full border border-gray-200 p-3 rounded-md bg-white text-black">
            <p data-error-for="url_original" class="text-red-500 text-sm mt-1 text-start"></p>
            <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-full">
                <p class="mb-2 text-start">Dominio</p>
                <input type="text" name="url_original" disabled value="https://encurtaai.com/"
                    class="outline-none w-full border border-gray-200 p-3 rounded-md disabled:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-500" />
                <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
                <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
                </div>
            </div>
            <div class="w-full">
                <p class="mb-2 text-start">Personalize seu link</p>
                <input type="text" name="slug" placeholder="ex: social"
                    class="outline-none w-full border border-gray-200 p-3 rounded-md bg-white text-black">
                <p data-error-for="slug" class="text-red-500 text-sm mt-1 text-start"></p>
                <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
                </div>
            </div>
        </div>
        <button id="submit-form"
            class="bg-[var(--color-primary)]  text-white rounded-md w-full  p-3 font-bold cursor-pointer ">Criar link
            curto</button>
    </section>
</form>

<form method="POST" id="section-form-qr-code" class=" w-full max-w-[700px] text-sm hidden">
    @csrf
    <section>
        <div>
            <p class="mb-2 text-start">Gerar QR Code</p>
            <input type="text" name="url_qr_code" placeholder="Cole sua URL aqui..."
                class="outline-none w-full border border-gray-200 p-3 rounded-md bg-white text-black">
            <p data-error-for="url_original" class="text-red-500 text-sm mt-1 text-start"></p>
            <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
            </div>
        </div>

        <button id="submit-form-qr-code"
            class="bg-[var(--color-primary)]  text-white rounded-md w-full  p-3 font-bold cursor-pointer ">Gerar QR
            Code</button>
    </section>

</form>