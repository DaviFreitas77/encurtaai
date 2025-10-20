<div id="modal-choose-function" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50 p-4">
    <div class="w-full max-w-3xl rounded-lg shadow-2xl bg-[var(--color-secondary)] p-6 relative">
        <!-- Botão de fechar -->
        <button
            class="close-modal-choose-function absolute top-4 right-4  hover:text-gray-600 text-3xl font-bold transition-colors">
            &times;
        </button>
        <p class="text-lg font-semibold mb-6 ">O que você deseja fazer?</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

            <a
            href="{{ route('createLink') }}"
                class="choose-shorten-link w-full border border-gray-200 rounded-md p-4 text-center    font-medium flex items-center justify-center gap-2 cursor-pointer hover:opacity-85">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                </svg>
                Encurtar um link longo
            </a>


            <button
                class="choose-create-qr w-full border border-gray-200 rounded-md p-4 text-center    font-medium  flex items-center justify-center gap-2 cursor-pointer hover:opacity-85">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="8" height="8"></rect>
                    <path d="M14 2h8v8h-8z"></path>
                    <path d="M2 14h8v8h-8z"></path>
                    <path d="M14 14h8v8h-8z"></path>
                    <path d="M18 10h.01"></path>
                    <path d="M10 18h.01"></path>
                </svg>
                Gerar um QR Code
            </button>
        </div>
    </div>
</div>