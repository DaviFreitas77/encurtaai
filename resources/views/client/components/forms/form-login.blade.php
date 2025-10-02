<div>
  <div class="flex flex-col mb-2">
    <h2 class="mt-4 text-xl font-bold">Bem-vindo de volta</h2>
    <p class="text-sm text-gray-600 mt-2">
      Faça login com seus dados para acessar sua conta.
    </p>


    <div class="flex flex-col sm:flex-row gap-3 mt-4">
      <button class="bg-white border border-gray-200 w-full flex items-center justify-center gap-2 px-4 py-2  rounded-sm hover:bg-gray-100 transition font-medium mt-4 ">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-5 h-5">
          <g>
            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
            <path fill="none" d="M0 0h48v48H0z"></path>
          </g>
        </svg>
        <p class=" text-sm">Entrar com Google</p>

      </button>
      <button class="bg-gray-800 text-white w-full flex items-center justify-center gap-2 px-4 py-2   rounded-sm hover:bg-gray-700 transition font-medium mt-4">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.308.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd" />
        </svg>
        <p class=" text-sm">Entrar com GitHub</p>

      </button>
    </div>

    <div class="flex items-center my-4">
      <div class="flex-grow border-t border-gray-200"></div>
      <span class="flex-shrink mx-4 text-gray-400 text-sm">ou</span>
      <div class="flex-grow border-t border-gray-200"></div>
    </div>
  </div>

  <form id="form-login" class="modal-content w-full text-sm" method="POST" action="{{route('login')}}">
    @csrf
    <div class="flex flex-col gap-4 mb-2">
      <div class="w-full">
        <input name="email" type="email" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none w-full" placeholder="E-mail" required>

      </div>
      <div class="w-full">
        <input name="password" type="password" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none w-full" placeholder="Senha" required>
        <p class="error text-red-500 text-sm mt-1"></p>
      </div>
    </div>
    <div class="flex justify-between items-center mb-4">
      <label class="flex items-center text-sm text-gray-600">
        <input type="checkbox" name="remember" class="mr-2"> Lembrar-me
      </label>
      <a id="show-form-password" class="text-primary text-sm hover:underline">Esqueceu a senha?</a>
    </div>
    <div class="flex w-full">
      <button type="submit" class="bg-[var(--color-primary)] transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Entrar</button>
    </div>
    <p class="mt-4 text-center text-sm">
      Não tem conta?
      <button id="buttonRegister" type="button" class="text-primary  cursor-pointer">Registrar</button>
    </p>
  </form>
</div>

<script>
  const formLogin = document.getElementById('form-login');
  const loginUrl = formLogin.action;



  formLogin.addEventListener('submit', async function(event) {
    event.preventDefault();
    const errorElement = formLogin.querySelector('.error');
    errorElement.textContent = "";

    const formData = new FormData(formLogin);

    try {
      const response = await fetch(loginUrl, {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          "x-csrf-token": formData.get("_token"),
        },
        body: formData
      })

      if (!response.ok) {
        if (response.status === 401) {
          const errorResponse = await response.json();
          errorElement.textContent = errorResponse.message;
        }

      } else {
        const data = await response.json()
        window.location.href = data.redirect_url;

      }
    } catch (error) {
      console.log(error)
    }

  })
</script>