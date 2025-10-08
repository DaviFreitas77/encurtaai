<div id="modal-create-url" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
    <div class="w-full max-w-3xl rounded-lg shadow-2xl bg-[var(--color-secondary)] p-6  absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
        <button class="close-modal-create-url absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>
            <h1 class="text-center mb-10 text-3xl font-bold">Encurtar seu link longo</h1>
        @include('client.components.forms.form-url')

        @include('client.components.modals.modal-QRcode')
    </div>
</div>
</div>