<form id="form_shortened_url" class="w-full max-w-[700px] text-sm">
    @csrf

    <div id="div-link-shortened" class="w-full my-4 border border-green-200  bg-green-50 hidden justify-center items-center rounded-md  ">
        <a id="link_shortened" target="_blank" class="w-full hidden min-w-[700px] p-3 text-center text-primary font-medium rounded-md"></a>
    </div>


   <div class="shadow-sm  p-6 rounded-md  w-full flex flex-col gap-4 mb-12">

        <div>
            <p class="mb-2">Encurte seu link longo</p>
            <input type="text" name="url_original" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-3 rounded-md bg-white">
            <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
            <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
            </div>
        </div>
        <div class="flex gap-4">
            <div class="w-full">
                <p class="mb-2">Dominio</p>
                <input
                    type="text"
                    name="url_original"
                    disabled
                    value="https://encurtaai.com/"
                    class="outline-none w-full border border-gray-200 p-3 rounded-md disabled:bg-gray-100 disabled:cursor-not-allowed disabled:text-gray-500" />
                <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
                <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
                </div>
            </div>
            <div class="w-full">
                <p class="mb-2">Personalize seu link</p>
                <input type="text" name="slug" placeholder="ex: social" class="outline-none w-full border border-gray-200 p-3 rounded-md bg-white">
                <p data-error-for="slug" class="text-red-500 text-sm mt-1"></p>
                <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
                </div>
            </div>
        </div>
        <button id="submit-form" class="bg-[var(--color-primary)]  text-white rounded-md w-full  p-3 font-bold cursor-pointer ">Criar link curto</button>
    </div>
</form>