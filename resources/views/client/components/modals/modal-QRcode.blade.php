<div class="modal-qr-code fixed inset-0 z-50 hidden  items-center justify-center bg-black/50 backdrop-blur-sm p-4 transition-opacity duration-300">
    <div class="w-full max-w-md rounded-lg shadow-2xl bg-[var(--color-secondary)] p-8 relative text-center">
        
        <!-- Botão de fechar -->
        <button id="close-modal-qr-code"
            class="absolute top-3 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-20">
        </div>

        <!-- Conteúdo centralizado -->
        <div class="flex flex-col items-center justify-center space-y-4">

            <!-- QR Code -->
            <div id="qr_code"
                class="p-4 bg-white rounded-lg shadow-inner text-black font-medium flex items-center justify-center min-w-[150px] min-h-[150px]">
                <!-- O código QR será inserido aqui via JavaScript -->
            </div>

            <!-- Texto -->
            <div class="mt-2 text-white">
                <h1 class="font-bold text-2xl leading-tight">Encurte seus links em segundos</h1>
                <p class="font-medium text-sm mt-3 text-gray-300">Compartilhe facilmente através de QR Codes</p>
            </div>

        </div>
    </div>
</div>
