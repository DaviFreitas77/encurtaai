<form id="form_shortened_url" class="w-full max-w-[700px] text-sm">
      @csrf
    <input type="text" name="url_original" placeholder="Cole sua URL aqui..." class="outline-none w-full border border-gray-200 p-3 rounded-md" required>
    <div class="flex flex-wrap md:flex-nowrap items-center justify-center w-full mt-5 gap-5">
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full max-w-[400px] mb-2 text-gray-600"> Senha(opcional)</p>
            <input type="text" name="password_url" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-3 rounded-md ">
        </div>
        <div class="w-full flex flex-col items-center md:items-start">
            <p class="text-start w-full max-w-[400px] mb-2 text-gray-600">Persolizar URL(opcional)</p>
            <input type="text" name="slug" placeholder="ex: meu-link-incrivel" class="outline-none w-full border max-w-[500px] border-gray-200 p-3 rounded-md ">
        </div>
    </div>
    <button class="bg-primary text-white rounded-md w-full  p-3 mt-5 font-bold cursor-pointer ">Criar link curto</button>
</form>


<script>
    const form = document.getElementById('form_shortened_url');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(form);
        
        try {
              const response = await fetch('/shortenedUrl', {
            method:'POST',
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'x-csrf-token': formData.get('_token')
            },
            body: formData
        })

        const data = await response.json();
        console.log(data)

        } catch (error) {
            console.log(error)
        }
      
    })
</script>