<form id="form_shortened_url" class="w-full max-w-[700px] text-sm">
    @csrf

    <div id="div-link-shortened" class="w-full my-4 border border-green-200  bg-green-50 hidden justify-center items-center rounded-md  ">
        <a id="link_shortened" target="_blank" class="w-full hidden min-w-[700px] p-3 text-center text-primary font-medium rounded-md"></a>
    </div>


    <input type="text" name="url_original" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-3 rounded-md">
    <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
    <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full lg:max-w-[400px] mb-2 text-gray-600"> Senha(opcional)</p>
            <input type="text" name="password_url" placeholder="ex: meu-link-incrivel" class="outline-none w-full border lg:max-w-[500px] border-gray-200 p-3 rounded-md ">
            <p data-error-for="password_url" class="text-red-500 text-sm mt-1"></p>
        </div>
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full lg:max-w-[400px] mb-2 text-gray-600">Personalizar URL(opcional)</p>
            <input type="text" name="slug" placeholder="ex: meu-link-incrivel" class="outline-none w-full border lg:max-w-[500px] border-gray-200 p-3 rounded-md ">
            <p data-error-for="slug" class="text-red-500 text-sm mt-1"></p>
        </div>
    </div>
    <button id="submit-form" class="bg-[var(--color-primary)] text-white rounded-md w-full  p-3 mt-5 font-bold cursor-pointer ">Criar link curto</button>

</form>