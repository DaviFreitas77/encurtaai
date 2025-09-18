  <form class="modal-content w-full" method="POST" action="/login">
      <div class="flex flex-col gap-4 mb-2">
          <input name="name" type="text" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="Nome" required>
          
          <input name="email" type="email" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="E-mail" required>
          <input name="password" type="password" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="Senha" required>
      </div>
      <div class="flex w-full">
          <button type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Entrar</button>
      </div>
        <p class="mt-4 text-center text-sm">
                Já tem conta?
                <button id="buttonLogin" class="text-blue-600 underline cursor-pointer">Entrar</button>
            </p>
  </form>