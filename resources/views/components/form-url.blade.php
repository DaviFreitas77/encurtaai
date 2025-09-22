<form id="form_shortened_url" class="w-full max-w-[700px] text-sm">
    @csrf

    <div id="div-link-shortened" class="w-full my-4 border border-green-200  bg-green-50 hidden justify-center items-center rounded-md  ">
        <a id="link_shortened" href="#" target="_blank" class="w-full hidden min-w-[700px] p-3 text-center text-primary font-medium rounded-md"></a>
    </div>


    <input type="text" name="url_original" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-3 rounded-md">
    <p data-error-for="url_original" class="text-red-500 text-sm mt-1"></p>
    <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full max-w-[400px] mb-2 text-gray-600"> Senha(opcional)</p>
            <input type="text" name="password_url" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-3 rounded-md ">
            <p data-error-for="password_url" class="text-red-500 text-sm mt-1"></p>
        </div>
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full max-w-[400px] mb-2 text-gray-600">Personalizar URL(opcional)</p>
            <input type="text" name="slug" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-3 rounded-md ">
            <p data-error-for="slug" class="text-red-500 text-sm mt-1"></p>
        </div>
    </div>
    <button class="bg-primary text-white rounded-md w-full  p-3 mt-5 font-bold cursor-pointer ">Criar link curto</button>


</form>


<script>
    const form = document.getElementById('form_shortened_url');
    const linkShortened = document.getElementById('link_shortened');
    const divLinkShortened = document.getElementById('div-link-shortened');



    function clearErrors() {
        const allErrorElements = form.querySelectorAll('[data-error-for]');
        allErrorElements.forEach(el => el.textContent = '');
    }

    function showError(fieldName, message) {
        const errorElement = form.querySelector(`[data-error-for="${fieldName}"]`);
        if (errorElement) {
            errorElement.textContent = message;
        }
    }

    function showShortenedLink(url) {
        divLinkShortened.classList.remove('hidden');
        divLinkShortened.classList.add('flex');
        linkShortened.href = url;
        linkShortened.textContent = url;
        linkShortened.classList.remove('hidden');
    }

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        clearErrors();

        const formData = new FormData(form);

        try {
            const response = await fetch('/shortenedUrl', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'x-csrf-token': formData.get('_token')
                },
                body: formData
            })

            if (!response.ok) {
                if (response.status === 422) {
                    const errorResponse = await response.json();
                    const errors = errorResponse.errors;

                    for (const fieldName in errors) {
                        const message = errors[fieldName][0];
                        showError(fieldName, message);
                    }
                } else {
                    console.log('erro desconhecido')

                }
            } else {
                const data = await response.json();
                const urlShortened = data.url_shortened;
                showShortenedLink(urlShortened)
                form.reset();
            }


        } catch (error) {
            console.log(error)
        }
    })
</script>