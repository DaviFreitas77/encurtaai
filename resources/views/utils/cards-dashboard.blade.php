@props(['totalActive', 'totalInactive', 'totalExpired', 'totalUsers','allUrlUser','activeUrlUser','inactiveUrlUser','expiredUrlUser'])
@auth
<div class="flex gap-4 items-center justify-center">
    @if(auth()->user()->role == 'admin')
    <div class="mt-10  grid grid-cols-2 w-full gap-4">
        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl w-full">
            <div class="flex w-full justify-between items-center">
                <p>Links ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium"> {{ $totalActive }}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Links inativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalInactive}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Links expirados</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalExpired}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">201</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>
    </div>

    <div class="mt-10 max-w-130 grid grid-cols-2 w-full gap-4">
        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl h-screen max-h-71">
            <div class="flex w-full justify-between items-center">
                <p>Usuarios</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalUsers}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>
        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">201</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

    </div>
    @else
    <div class="mt-10  grid grid-cols-2 w-full gap-4">
        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Total de links</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$allUrlUser->count()}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>
        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl w-full">
            <div class="flex w-full justify-between items-center">
                <p>Links ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium"> {{ $activeUrlUser }}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Links inativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$inactiveUrlUser}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[#1D1D29] p-6 flex flex-col gap-1 rounded-xl">
            <div class="flex w-full justify-between items-center">
                <p>Links expirados</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$expiredUrlUser}}</p>
            <p class="text-[12px]"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>
    </div>
    @endif
</div>
@endauth