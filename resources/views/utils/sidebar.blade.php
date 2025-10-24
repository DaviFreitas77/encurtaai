@auth
<nav id="sidebar"
    class=" hidden lg:flex h-screen flex-col bg-[#1D1D29] p-4 w-64  justify-between">

    @if(auth()->user()->role == 'admin')
    <ul class="space-y-2 ">
        <div class="flex justify-center items-center mb-8"><img src="{{asset('image/logo.png')}}" alt="" class="w-42"></div>
        <button
            class="open-modal-create-url flex items-center rounded-lg text-gray-300 hover:text-white bg-gray-700 hover:opacity-90 cursor-pointer w-full px-4 py-3 gap-3">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>
            <span class="text-menu font-medium ">Criar link</span>

        </button>
        <li
            class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="secret-dashboard"
                class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">Dashboard</span>
            </a>
        </li>
        <li
            class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="secret-dashboard"
                class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">Métricas</span>
            </a>
        </li>
        <li
            class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="create-link"
                class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">Criar
                </span>
            </a>
        </li>
    </ul>
    @else
    <ul class="space-y-4">
        <div class="flex justify-center items-center mb-8"><img src="{{asset('image/logo.png')}}" alt="" class="w-22"></div>
        <button
            class="open-modal-choose-function flex items-center rounded-sm text-white  bg-[var(--color-primary)] hover:opacity-90 cursor-pointer w-full px-4 py-3 gap-3">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
            </svg>
            <span class="text-menu font-medium text-base">Criar link</span>

        </button>

        <a href="{{route('home')}}"
            class="flex items-center gap-3 rounded-sm px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white {{request()->routeIs('home') ? 'bg-gray-700': ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <span
                class="text-menu font-medium text-base">Dashboard</span>
        </a>

        <a href="{{route('qrcode')}}"
            class="flex items-center gap-3 rounded-sm px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white {{request()->routeIs('qrcode') ? 'bg-gray-700': ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <span
                class="text-menu font-medium text-base">QR Codes</span>
        </a>

    </ul>

    @endif

    <form method="POST" action="{{route('logout')}}">
        @csrf
        <button
            class="flex items-center gap-3 rounded-sm px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white cursor-pointer w-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
            <span
                class="text-menu font-medium  ">Sair</span>
        </button>
    </form>
 
</nav>
@endauth