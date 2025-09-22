  <div>
      <div class="flex flex-col mb-10">
          <h2 class="mt-4 text-xl font-bold">Redefinir senha</h2>
          <p class="text-sm text-gray-600 mt-2">
              Informe seu e-mail e enviaremos um <strong>código de verificação</strong> para redefinir sua senha.
          </p>

      </div>
      <form class="modal-content w-full text-sm" method="POST" action="/login">
          <div class="flex flex-col gap-4 mb-2">
              <input name="email" type="email" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="E-mail" required>

          </div>

          <div class="flex w-full">
              <button id="show-form-code" type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Enviar email</button>
          </div>

      </form>
  </div>