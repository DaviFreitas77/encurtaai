<div class="modal-qr-code fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4 transition-opacity duration-300">
    <div class="w-full max-w-xl rounded-lg shadow-2xl bg-[var(--color-secondary)] p-6 relative">
        <button id="close-modal-qr-code"
            class="absolute top-3 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>

        <div class="flex items-center justify-center">
            <img src="{{asset('image/logo.png')}}" alt="Logo" class="w-24">
        </div>


        <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-4">

            <div id="qr_code" class="p-3 text-center text-black font-medium rounded-md">
                <!-- O código QR será inserido aqui via JavaScript -->
            </div>

            <div class="mt-2 flex flex-col items-center sm:items-start text-center sm:text-left">
                <h1 class="font-bold text-2xl leading-6">Encurte seus links em segundos</h1>
                <p class="font-medium text-sm mt-4">Compartilhe facilmente através de Qrcodes</p>
                <button
                    class="mt-4 bg-[var(--color-primary)] px-8 py-1 rounded-sm text-sm cursor-pointer hover:opacity-85 text-white">Copiar
                    Link</button>
            </div>
        </div>

    </div>
</div>