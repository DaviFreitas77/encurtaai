  <div>
      <div class="flex flex-col mb-10">
          <h2 class="mt-4 text-xl font-bold">Crie sua nova senha</h2>
          <p class="text-sm text-gray-600 mt-2">
              Escolha uma senha segura para proteger sua conta. Certifique-se de que seja fácil de lembrar.
          </p>
      </div>
      <form class="modal-content w-full text-sm" method="POST" action="/login">
          <div class="flex flex-col gap-4 mb-2">
              <input name="newPassword" type="string" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="Nova senha" required>

          </div>
          <div class="flex flex-col gap-4 mb-2">
              <input name="ConfirmnewPassword" type="string" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none" placeholder="Confirmar senha" required>

          </div>

          <div class="flex w-full">
              <button type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Criar nova senha</button>
          </div>

      </form>
  </div>