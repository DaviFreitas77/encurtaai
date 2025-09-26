<div id="modal-limited-url" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
   <div class="w-full max-w-3xl rounded-lg shadow-2xl bg-white  p-6  absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
      <button  class="close-modal-url-limited absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>

      <div class="grid md:grid-cols-2 gap-8 items-center">
         <div class="flex flex-col">
            <h2 class="text-2xl font-bold text-gray-800">Crie sua conta e aproveite ao máximo!</h2>
            <p class="text-sm text-gray-600 mt-2 mb-6">
               Você atingiu o limite de URLs para visitantes. Crie uma conta gratuita para ter acesso a recursos incríveis:
            </p>

            <ul class="space-y-3 text-sm mb-8">
               <li class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span>Links encurtados **ilimitados**</span>
               </li>
               <li class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span>Estatísticas detalhadas de cliques</span>
               </li>
               <li class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span>Gerenciamento completo dos seus links</span>
               </li>
               <li class="flex items-center gap-3">
                  <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span>Geração de QR Codes</span>
               </li>
            </ul>

            <div class="flex flex-col gap-3">
               <button id="openModalLogin" class="close-modal-url-limited bg-primary hover:bg-blue-700 transition-colors text-white px-6 py-3 rounded-md font-semibold w-full">Criar Conta Grátis</button>
            </div>
         </div>
         <img src="{{ asset('image/sistema.png') }}" alt="Ilustração da plataforma Encurtaái" class="w-full rounded-lg shadow-lg hidden md:block" />
      </div>
   </div>
</div>