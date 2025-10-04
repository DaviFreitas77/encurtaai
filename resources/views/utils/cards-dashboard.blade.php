@props(['totalActive', 'totalInactive', 'totalExpired', 'totalUsers','allUrlUser','activeUrlUser','inactiveUrlUser','expiredUrlUser'])
@auth
<div class="flex gap-4 items-center justify-center flex-col">
    @if(auth()->user()->role == 'admin')
    <div class="mt-10  grid grid-cols-4 w-full gap-1">
        <div class="bg-[var(--color-secondary)] p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
            <div class="flex w-full justify-between items-center">
                <p class="text-base xl:text-xl">Links ativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                        <circle cx="12" cy="12" r="3" fill="#22C55E" />
                    </g>
                </svg>
            </div>
            <p class="text-3xl font-medium"> {{ $totalActive }}</p>
            <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>


        <div class="bg-[var(--color-secondary)] p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
            <div class="flex w-full justify-between items-center">
                <p class="text-base xl:text-xl">Links inativos</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                        <circle cx="12" cy="12" r="3" fill="#6B7280" />
                    </g>
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalInactive}}</p>
            <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[var(--color-secondary)] p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
            <div class="flex w-full justify-between items-center">
                <p class="text-base xl:text-xl">Links expirados</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                        <circle cx="12" cy="12" r="3" fill="#F59E0B" />
                    </g>
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalExpired}}</p>
            <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[var(--color-secondary)] p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
            <div class="flex w-full justify-between items-center">
                <p class="text-base xl:text-xl">Total de links</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <g>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                        <circle cx="12" cy="12" r="3" fill="#3B82F6" />
                    </g>
                </svg>
            </div>
            <p class="text-3xl font-medium">201</p>
            <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

        <div class="bg-[var(--color-secondary)] p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
            <div class="flex w-full justify-between items-center">
                <p class="text-base xl:text-xl">Total de usuarios</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                </svg>
            </div>
            <p class="text-3xl font-medium">{{$totalUsers}}</p>
            <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
        </div>

    </div>


    @else
    <div class="w-full">
        <div class="mt-10 grid grid-cols-2 md:grid-cols-2 xl:grid-cols-4 w-full gap-1">
            <div class="bg-[var(--color-secondary)]  p-4 flex flex-col justify-between rounded-sm w-full xl:h-48">
                <div class="flex w-full justify-between items-center">
                    <p class="text-base xl:text-xl">Total de links</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <g>
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                            <circle cx="12" cy="12" r="3" fill="#3B82F6" />
                        </g>
                    </svg>
                </div>
                <p class="text-3xl font-medium">{{$allUrlUser->count()}}</p>
                <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
            </div>
            <div class="bg-[var(--color-secondary)] p-4 flex flex-col gap-1 rounded-sm justify-between w-full">
                <div class="flex w-full justify-between items-center">
                    <p class="text-base xl:text-xl">Links ativos</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <g>
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                            <circle cx="12" cy="12" r="3" fill="#22C55E" />
                        </g>
                    </svg>
                </div>
                <p class="text-3xl font-medium"> {{ $activeUrlUser }}</p>
                <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
            </div>
            <div class="bg-[var(--color-secondary)] p-4 flex flex-col gap-1 rounded-sm  justify-between w-full">
                <div class="flex w-full justify-between items-center">
                    <p class="text-base xl:text-xl">Links inativos</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <g>
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                            <circle cx="12" cy="12" r="3" fill="#6B7280" />
                        </g>
                    </svg>
                </div>
                <p class="text-3xl font-medium">{{$inactiveUrlUser}}</p>
                <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
            </div>
            <div class="bg-[var(--color-secondary)] p-4 flex flex-col gap-1 rounded-sm  justify-between w-full">
                <div class="flex w-full justify-between items-center">
                    <p class="text-base xl:text-xl">Links expirados</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <g>
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M18.364 15.536L16.95 14.12l1.414-1.414a5 5 0 1 0-7.071-7.071L9.88 7.05 8.465 5.636 9.88 4.222a7 7 0 0 1 9.9 9.9l-1.416 1.414zm-2.828 2.828l-1.414 1.414a7 7 0 0 1-9.9-9.9l1.416-1.414L7.05 9.88l-1.414 1.414a5 5 0 1 0 7.071 7.071l1.414-1.414 1.414 1.414z" />
                            <circle cx="12" cy="12" r="3" fill="#F59E0B" />
                        </g>
                    </svg>
                </div>
                <p class="text-3xl font-medium">{{$expiredUrlUser}}</p>
                <p class="text-sm"> <span class="text-green-500">8.2% </span>no utimo mês </p>
            </div>
        </div>

    </div>
    @endif
    <div class="w-full h-0.5 bg-[var(--color-secondary)] "></div>
</div>
@endauth