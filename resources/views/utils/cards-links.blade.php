<template id="urlCardTemplate">
  <div class="bg-[var(--color-secondary)] backdrop-blur-sm border border-[var(--color-secondary)]  rounded-lg flex flex-col ">

    <div class="p-4 flex-1 flex flex-col gap-4">
      <section class="flex justify-between items-start">
        <div class="flex items-center gap-3">
          <p class="id hidden "></p>
          <p class="nameCard text-base font-bold "></p>
          <button class="text-slate-500 hover:text-sky-400  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
              <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
          </button>
          <input class="qrCode" type="hidden" value="">
        </div>

        <div class="flex items-center gap-2">
          <button class="copy-button bg-[var(--color-background)] hover:opacity-85   px-3 py-1.5 text-xs rounded-md cursor-pointer flex items-center gap-2  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
              <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
            </svg>
            <span class="text-xs">Copiar</span>
          </button>

          <button class="open-dropdown cursor-pointer  bg-[var(--color-background)] hover:opacity-85 rounded-md px-2 py-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" width="17" height="17" viewBox="0 0 24 24">
              <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
            </svg>
          </button>
          @include('utils.dropdown')


        </div>
      </section>

      <div class="flex flex-col gap-1.5">
        <a target="_blank" class="slug text-sky-400 hover:text-sky-300 hover:underline font-semibold break-all text-base   "></a>
        <p class="urlOriginal text-slate-500 break-all text-xs truncate"></p>
      </div>
    </div>

    <div class="border-t border-[var(--color-background)] px-6 py-3">
      <div class="flex items-center gap-6 text-sm">
        <div class="flex items-center gap-2 text-slate-400">
          <svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
          </svg>
          <span class="clicks text-xs font-medium"></span>
        </div>
        <div class="flex items-center gap-2 text-slate-400">

          <span class="expirationDate text-xs font-medium"></span>
        </div>

      </div>
    </div>

  </div>
</template>