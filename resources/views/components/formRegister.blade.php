<form id="form-register" class="modal-content w-full" method="POST" action="{{ route('criar.store') }}">
  @csrf
  <div class="flex flex-col gap-4 mb-2">
    <div class="w-full">
      <input name="name" type="text" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none w-full" placeholder="Nome">
      <span class="text-red-500 text-sm" data-error="name"></span>
    </div>
    <div class="w-full">
      <input name="email" type="email" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none w-full" placeholder="E-mail">
      <span class="text-red-500 text-sm" data-error="email"></span>
    </div>
    <div class="w-full">
      <input name="password" type="password" class="px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-primary outline-none w-full" placeholder="Senha">
      <span class="text-red-500 text-sm" data-error="password"></span>
    </div>
  </div>

  <div class="flex w-full">
    <button type="submit" class="bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-2 rounded-sm font-semibold w-full">Entrar</button>
  </div>

  <!-- Espaço para mensagem de sucesso -->
  <p id="success-message" class="text-green-600 text-center mt-4"></p>

  <p class="mt-4 text-center text-sm">
    Já tem conta?
    <button id="buttonLogin" class="text-blue-600 underline cursor-pointer">Entrar</button>
  </p>
</form>


