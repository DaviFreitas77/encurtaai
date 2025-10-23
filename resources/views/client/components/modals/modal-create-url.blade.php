<div id="modal-create-url" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4 transition-opacity duration-300">
    <div class="w-full max-w-3xl rounded-lg shadow-2xl bg-[var(--color-secondary)] p-6 mx-2">

        <div class="relative">
            <button
                class="close-modal-create-url absolute -top-2 -right-2 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>
        </div>

        @include('client.components.forms.form-url')
        
    </div>
</div