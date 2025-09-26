<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/form-url.js','resources/js/redirect.js'])
</head>

<body class="bg-[#12121E]">
    <main class="bg-[#12121E] flex w-full text-white justify-center h-screen">
        @include('admin.components.sidebar')
        <div class="flex w-full flex-col py-12 px-15 max-w-[1920px]">
            <section>
                @include('admin.components.header')
            </section>
            <section class="flex justify-center items-center mt-10">
                @include('client.components.form-url')
            </section>
        </div>
    </main>


</body>

</html>