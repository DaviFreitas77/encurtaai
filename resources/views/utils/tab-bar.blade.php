<div class="fixed bottom-0 left-0 w-full z-50 bg-[var(--color-secondary)] border-t border-[var(--color-primary)] shadow-md lg:hidden">
    <div class="flex justify-around items-center h-16 text-sm font-medium text-gray-500">

        <!-- inicio -->
        <a href="{{ route('home') }}"
            class="tab-item flex flex-col items-center justify-center text-gray-500 hover:text-black transition-all duration-150 {{ request()->routeIs('home') ? 'text-black' : '' }}">
            <svg class="w-6 h-6 mb-0.5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 14v-6h4v6"></path>
            </svg>
            <span class="text-xs">Início</span>
        </a>
        <a href="{{ route('qrcode') }}"
            class="tab-item flex flex-col items-center justify-center text-gray-500 hover:text-black transition-all duration-150 {{ request()->routeIs('home') ? 'text-black' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="8" height="8"></rect>
                <path d="M14 2h8v8h-8z"></path>
                <path d="M2 14h8v8h-8z"></path>
                <path d="M14 14h8v8h-8z"></path>
                <path d="M18 10h.01"></path>
                <path d="M10 18h.01"></path>
            </svg>
            <span class="text-xs">QR Codes</span>
        </a>

        <!-- criar url -->
        <button type="button"
            class="open-modal-choose-function tab-item flex flex-col items-center justify-center text-gray-500 hover:text-black transition-all duration-150">
            <svg class="w-6 h-6 mb-0.5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
            </svg>
            <span class="text-xs">Criar</span>
        </button>


        <form method="POST" action="{{route('logout')}}" class="tab-item flex flex-col items-center justify-center text-gray-500 hover:text-black transition-all duration-150 {{ request()->routeIs('dashboard') ? 'text-black' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
            <span class="text-xs">Sair</span>
        </form>

    </div>

</div>