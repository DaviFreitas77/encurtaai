<div id="modal-create-url" class="hidden fixed inset-0 z-50 items-center justify-center bg-black/50">
    <div class="w-full max-w-3xl rounded-lg shadow-2xl bg-[var(--color-secondary)] p-6 mx-2">

        <div class="relative">
            <button
                class="close-modal-create-url absolute -top-2 -right-2 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>
        </div>

        <h1 class="text-center mb-10 text-3xl font-bold">Encurtar seu link longo</h1>

        @include('client.components.forms.form-url')
        @include('client.components.modals.modal-QRcode')
    </div>
</div