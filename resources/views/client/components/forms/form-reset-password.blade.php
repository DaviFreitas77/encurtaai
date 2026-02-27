<article class="flex gap-2">
    <section class="w-full max-w-150 p-6">
        <div id="formSendMail" class="flex">
            @include('client.components.sub-components.form-send-mail')
        </div>

        <div id="formCode" class="hidden">
            @include('client.components.sub-components.reset-code-form')
        </div>

        <div id="formResetPassword" class="hidden">
            @include('client.components.sub-components.form-reset-password')
        </div>
    </section>
    <section class="w-full max-w-md">
        <img src="{{asset('image/auth.png')}}" alt="" class="object-cover w-full h-full rounded-r-2xl">
    </section>
</article>