<form id="form_shortened_url" class="w-full max-w-[700px] text-sm">
    @csrf

    <div id="div-link-shortened" class="w-full my-4 border border-green-200  bg-green-50 hidden justify-center items-center rounded-md  ">
        <a id="link_shortened" target="_blank" class="w-full hidden min-w-[700px] p-3 text-center text-primary font-medium rounded-md"></a>
    </div>


    <div>
        <input type="text" name="url_original" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-3 rounded-md">
        <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
        <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
        </div>
        <button id="submit-form" class="bg-[var(--color-primary)]  text-white rounded-md w-full  p-3 font-bold cursor-pointer ">Criar link curto</button>
    </div>

</form>