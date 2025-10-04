<div
    class="lg:hidden flex items-center justify-between bg-white bg-opacity-80 backdrop-blur-md rounded-full px-6 py-3 shadow-lg max-w-md mx-auto transition-all duration-300 hover:shadow-xl hover:bg-opacity-90 fixed bottom-10 left-1/2 -translate-x-1/2 gap-10">
    <a
        href="{{route('home')}}"
        class="text-gray-600 hover:text-gray-800 mx-2 transition-transform duration-200 ease-in-out hover:scale-110 focus:outline-none focus:ring-2 focus:ring-red-500 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
        </svg>
    </a>
    <a
        href="{{route('myQrCode')}}"
        class="text-gray-600 hover:text-gray-800 mx-2 transition-all duration-200 ease-in-out hover:rotate-12 focus:outline-none focus:ring-2 focus:ring-gray-500 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M3 3h9v9H3V3zm0 11h9v9H3v-9zm11 0h9v9h-9v-9zm0-11h9v9h-9V3z" />
        </svg>
    </a>
    <a
        href="{{ route('create-link-user') }}"
        class="text-gray-600 hover:text-gray-800 mx-2 transition-all duration-200 ease-in-out hover:bg-gray-200 hover:shadow-md rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M8 11h8v2H8v-2zm2.71-5.29c-.39-.39-1.02-.39-1.41 0l-4 4c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L10 8.41l2.29 2.29c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41l-4-4zM17 7h-3v2h3c1.65 0 3 1.35 3 3s-1.35 3-3 3h-3v2h3c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
        </svg>
    </a>

</div>