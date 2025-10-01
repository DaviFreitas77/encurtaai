@auth
<nav id="sidebar" class="group flex h-screen w-20 flex-col bg-[#1D1D29] p-4 hover:w-64 transition-width duration-300 ease-in-out justify-between ">

    @if(auth()->user()->role == 'admin')
    <ul class="space-y-2 ">
        <button id="menu-button" class="flex items-center cursor-pointer mb-4">
            <div class="flex items-center  rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </div>
        </button>
        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="secret-dashboard" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Dashboard</span>
            </a>
        </li>
        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="secret-dashboard" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Métricas</span>
            </a>
        </li>
        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="create-link" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Criar </span>
            </a>
        </li>
    </ul>
    @else
    <ul class="space-y-4">
        <button id="menu-button" class="flex items-center cursor-pointer mb-4">
            <div class="flex items-center  rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

            </div>
        </button>
        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="{{route('home')}}" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Dashboard</span>
            </a>
        </li>

        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="{{route('top-click')}}" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5zm14 3c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-1h14v1z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Top10 </span>
            </a>
        </li>
        <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <a href="{{ route('create-link-user') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 11h8v2H8v-2zm2.71-5.29c-.39-.39-1.02-.39-1.41 0l-4 4c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L10 8.41l2.29 2.29c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41l-4-4zM17 7h-3v2h3c1.65 0 3 1.35 3 3s-1.35 3-3 3h-3v2h3c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
                </svg>
                <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Criar </span>
            </a>
        </li>
    </ul>

    @endif
    <li class="flex items-center  rounded-lg  text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
        <a href="{{ route('create-link-user') }}" class="flex items-center gap-3 rounded-lg px-4 py-3 text-gray-300 transition-colors duration-200 hover:bg-gray-700 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                <path d="M0 0h24v24H0z" fill="none" />
                <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
            </svg>
            <span class="text-menu font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out text-lg">Sair </span>
        </a>
    </li>
</nav>
@endauth