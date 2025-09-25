  <div>
      <div class="flex flex-col mb-10">
          <h2 class="mt-4 text-xl font-bold">Insira seu código</h2>
          <p class="text-sm text-gray-600 mt-2">
              Digite o código de verificação que enviamos para o e-mail <strong>usuario@exemplo.com</strong> para continuar com a redefinição de senha.
          </p>
      </div>
      <form class="modal-content w-full text-sm" method="POST" action="/login">
          <div class="flex flex-col gap-4 mb-2">
              <input name="codigo" type="number" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="insira o código" required>

          </div>

          <div class="flex w-full">
              <button id="showFormResetPassword" type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Enviar código</button>
          </div>

      </form>
  </div>