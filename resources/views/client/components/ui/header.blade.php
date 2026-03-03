<header class="flex justify-center items-center  h-25">
    <nav class="relative flex justify-between w-full items-center p-5 lg:max-w-[1100px] border  border-gray-100/50 text-sm  rounded-2xl">
        <img src="image/logo.png" alt="logo" class="w-28">
        <div>
            <button
                class="relative overflow-hidden px-4 py-2 border border-[var(--color-primary-100)]
         text-primary font-medium rounded-md group cursor-pointer">

                <!-- Fundo animado -->
                <span
                    class="absolute inset-0 w-0 bg-[var(--color-primary)]
           transition-all duration-300 ease-out
           group-hover:w-full">
                </span>

                <!-- Texto -->
                <span class="relative z-10 transition-colors duration-300 group-hover:text-white">
                    Dev API
                </span>
            </button>

            <button id="openModalLogin" class="bg-[var(--color-primary)] text-white px-6 py-2 rounded-md  transition mr-3 cursor-pointer font-medium">
                Entrar
            </button>
        </div>
    </nav>
</header>