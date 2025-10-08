
<div class="modalLogin hidden fixed inset-0 z-50  items-center justify-center bg-black/50 p-4">
    <div class="w-full max-w-md rounded-lg shadow-2xl bg-white p-6 relative">
        <button id="closeModalLogin" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-3xl font-bold transition-colors">&times;</button>

        <!-- Formulários -->
        <div id="formLogin">
            @include('client.components.forms.form-login')
        </div>

        <div id="formRegister" class="hidden">
            @include('client.components.forms.form-register')
        </div>

        <div id="formSendMail" class="hidden">
            @include('client.components.forms-reset-password.form-send-mail')
        </div>

        <div id="formCode" class="hidden">
            @include('client.components.forms-reset-password.reset-code-form')
        </div>

        <div id="formResetPassword" class="hidden">
            @include('client.components.forms-reset-password.form-reset-password')
        </div>

    </div>
</div>