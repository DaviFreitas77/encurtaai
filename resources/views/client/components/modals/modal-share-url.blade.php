<!-- Modal de Compartilhar -->
<div id="modal-share"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4 transition-opacity duration-300">

    <div
        class="w-full max-w-md rounded-2xl shadow-2xl bg-[var(--color-secondary)] p-8 relative text-center transform transition-all scale-95 opacity-0 animate-[fadeIn_0.3s_ease_forwards]">

        <!-- Botão fechar -->
        <button
            class="close-modal-share absolute top-4 right-4 text-gray-600 hover:text-black text-3xl font-bold transition-colors"
            aria-label="Fechar">
            &times;
        </button>

        <!-- Título -->
        <h2 class="text-2xl font-extrabold mb-8 text-[var(--color-primary)]">
            Compartilhe seu link 
        </h2>

        <!-- Botões -->
        <div class="grid grid-cols-3 gap-6 justify-items-center">

            <!-- WhatsApp -->
            <button id="share-whatsapp"
                class="group flex flex-col items-center gap-2 cursor-pointer transition-transform hover:scale-110">
                <div
                    class="bg-green-500 rounded-full p-4 flex items-center justify-center w-16 h-16 shadow-md group-hover:shadow-green-400/40 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20.52 3.48A11.7 11.7 0 0012 0C5.37 0 0 5.37 0 12a11.7 11.7 0 001.68 6L0 24l6-1.68A11.7 11.7 0 0012 24c6.63 0 12-5.37 12-12a11.7 11.7 0 00-3.48-8.52zM12 22a10 10 0 01-5.4-1.5l-.4-.25-3.54 1 1-3.5-.26-.4A10 10 0 1122 12a9.93 9.93 0 01-10 10zm5.43-7.57c-.29-.15-1.7-.83-1.96-.92-.26-.09-.45-.14-.64.15-.19.28-.74.92-.9 1.1-.16.19-.32.21-.6.07a8.2 8.2 0 01-2.4-1.49 9.07 9.07 0 01-1.68-2.09c-.17-.29 0-.44.13-.58.13-.13.29-.32.43-.48a1.92 1.92 0 00.29-.48.61.61 0 000-.56c-.08-.15-.64-1.54-.88-2.11-.23-.55-.47-.47-.64-.48a2.6 2.6 0 00-.56-.01c-.19 0-.5.07-.76.36s-1 1-.99 2.43 1.03 2.82 1.17 3.02a12.3 12.3 0 002 2.94 16.1 16.1 0 003.17 2.67c.42.24.75.19 1.03.12a3 3 0 001.79-1.03 3.74 3.74 0 001.31-2.47c.01-.22-.16-.35-.34-.46z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold ">WhatsApp</span>
            </button>

            <!-- Facebook -->
            <button id="share-facebook"
                class="group flex flex-col items-center gap-2 cursor-pointer transition-transform hover:scale-110">
                <div
                    class="bg-blue-600 rounded-full p-4 flex items-center justify-center w-16 h-16 shadow-md group-hover:shadow-blue-400/40 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" 
                     viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.406.593 24 1.325 24h11.49v-9.294H9.692v-3.622h3.123V8.41c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.099 2.797.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.59l-.467 3.622h-3.123V24h6.116c.73 0 1.324-.594 1.324-1.326V1.326C24 .593 23.406 0 22.675 0z" />
                    </svg>
                </div>
                <span class="text-sm font-semibold ">Facebook</span>
            </button>

            <!-- Copiar Link -->
            <button id="copy-link-btn"
                class="group flex flex-col items-center gap-2 cursor-pointer transition-transform hover:scale-110">
                <div
                    class="bg-[var(--color-primary)] rounded-full p-4 flex items-center justify-center w-16 h-16 shadow-md group-hover:shadow-[var(--color-primary)]/40 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8 17H6a2 2 0 01-2-2V7a2 2 0 012-2h8a2 2 0 012 2v2" />
                        <rect x="8" y="13" width="8" height="8" rx="2" ry="2" />
                    </svg>
                </div>
                <span class="text-sm font-semibold ">Copiar</span>
            </button>

        </div>

    </div>
</div>

<!-- Animação -->
<style>
@keyframes fadeIn {
  to {
    opacity: 1;
    transform: scale(1);
  }
}
</style>
