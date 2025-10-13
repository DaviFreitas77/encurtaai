<template id="urlCardTemplate">
  <div class="bg-[var(--color-secondary)] backdrop-blur-sm border border-[var(--color-secondary)]  rounded-lg flex flex-col transition-all duration-300 hover:border-slate-600 hover:shadow-xl">

    <div class="p-6 flex-1 flex flex-col gap-4">
      <section class="flex justify-between items-start">
        <div class="flex items-center gap-3">
          <p class="text-lg font-bold ">Sem tag</p>
          <button class="text-slate-500 hover:text-sky-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
              <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
          </button>
        </div>

        <div class="flex items-center gap-2">
          <button class="copy-button bg-[var(--color-background)] hover:bg-slate-600   px-3 py-1.5 text-xs rounded-md cursor-pointer flex items-center gap-2 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
              <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
            </svg>
            <span>Copiar</span>
          </button>
          <button class="share-button bg-[var(--color-background)] hover:bg-slate-600   px-3 py-1.5 text-xs rounded-md cursor-pointer flex items-center gap-2 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="18" cy="5" r="3"></circle>
              <circle cx="6" cy="12" r="3"></circle>
              <circle cx="18" cy="19" r="3"></circle>
              <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
              <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
            </svg>
            <span>Share</span>
          </button>

          <button class="expanded-button cursor-pointer  bg-[var(--color-background)] hover:bg-slate-600 rounded-md px-2 py-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" width="17" height="17" viewBox="0 0 24 24">
              <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
            </svg>

          </button>


        </div>
      </section>

      <div class="flex flex-col gap-1.5">
        <a target="_blank" class="slug text-sky-400 hover:text-sky-300 hover:underline font-semibold break-all text-base sm:text-lg transition-colors"></a>
        <p class="urlOriginal text-slate-500 break-all text-xs truncate"></p>
      </div>
    </div>

    <div class="border-t border-[var(--color-background)] px-6 py-3">
      <div class="flex items-center gap-6 text-sm">
        <div class="flex items-center gap-2 text-slate-400">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          <span class="date text-xs"></span>
        </div>
        <div class="flex items-center gap-2 text-slate-400">
          <svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
          </svg>
          <span class="clicks text-xs font-medium"></span>
        </div>
      </div>
    </div>

  </div>
</template>