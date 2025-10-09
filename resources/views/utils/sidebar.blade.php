@auth
<nav id="sidebar"
    class=" hidden lg:flex group  h-screen w-20 flex-col bg-[#1D1D29] p-4 hover:w-64 transition-width duration-300 ease-in-out justify-between ">

    @if(auth()->user()->role == 'admin')
    <ul class="space-y-2 ">
        <button id="menu-button" class="flex items-center cursor-pointer mb-4">
            <div
                class="flex items-center  rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </div>
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
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Dashboard</span>
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
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Métricas</span>
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
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Criar
                </span>
            </a>
        </li>
    </ul>
    @else
    <ul class="space-y-4">
        <button id="menu-button" class="flex items-center cursor-pointer mb-4">
            <div
                class="flex items-center  rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </div>
        </button>
        <li
            class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="{{route('home')}}"
                class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Dashboard</span>
            </a>
        </li>
    </ul>

    @endif
    <li
        class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button
                class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span
                    class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Sair</span>
            </button>
        </form>

    </li>

</nav>
@endauth