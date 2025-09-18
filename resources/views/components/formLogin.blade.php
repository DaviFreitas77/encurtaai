  <form class="modal-content w-full" method="POST" action="/login">
      <div class="flex flex-col gap-4 mb-2">
          <input name="email" type="email" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="E-mail" required>
          <input name="password" type="password" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="Senha" required>
      </div>
      <div class="flex justify-between items-center mb-4">
          <label class="flex items-center text-sm text-gray-600">
              <input type="checkbox" name="remember" class="mr-2"> Lembrar-me
          </label>
          <a href="/forgot-password" class="text-primary text-sm hover:underline">Esqueceu a senha?</a>
      </div>
      <div class="flex w-full">
          <button type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Entrar</button>
      </div>
      <p class="mt-4 text-center text-sm">
          Não tem conta?
          <button id="buttonRegister" type="button" class="text-blue-600 underline cursor-pointer">Registrar</button>
      </p>
  </form>