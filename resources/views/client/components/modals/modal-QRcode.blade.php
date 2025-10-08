<div class="modal-qr-code hidden  fixed inset-0 z-50 items-center justify-center bg-black/50">
    <div class="w-full max-w-xl rounded-lg shadow-2xl bg-[var(--color-secondary)]  p-6  absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <button id="close-modal-qr-code" class=" absolute top-3 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>
        <div class="flex items-center justify-center"><img src="{{asset('image/logo.png')}}" alt="" class="w-24"></div>
        <div class="flex   justify-center items-center gap-4">


            <div id="qr_code" class="p-3 text-center text-black font-medium rounded-md ">
                <!-- O QR Code será inserido aqui -->
            </div>



            <div class="mt-2 flex flex-col items-start">
                <h1 class="font-bold text-2xl leading-6 text-start">Encurte seus links em segundos</h1>
                <p class="font-medium text-sm mt-4 text-start">Compartilhe facilmente através de Qrcodes</p>
                <button class="mt-4 bg-[var(--color-primary)] px-8 py-1 rounded-sm text-sm )] cursor-pointer hover:opacity-85 text-white">Copiar Link</button>
            </div>
        </div>

    </div>
</div>