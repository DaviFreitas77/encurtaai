<template id="urlCardTemplate">
  <div class="bg-[var(--color-secondary)] p-2 rounded-md h-30 flex justify-between">
    <div class="flex justify-between h-full">
      <div class="flex flex-col justify-between flex-1">
        <div>
          <div class="flex items-center justify-between mb-2">
            <a target="_blank" class="slug text-blue-600 hover:underline font-semibold break-all text-sm sm:text-base"></a>
          </div>
          <p class="urlOriginal text-xs text-gray-500 break-words"></p>
        </div>
        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-700">
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="status"></span>
          </div>
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="date"></span>
          </div>
          <div class="flex items-center gap-1">
            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13 16h-1v-4h-1m0-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
            <span class="clicks"></span>
          </div>
        </div>
      </div>
    </div>
    <div>
        <span class="qrCode"></span>
    </div>
  </div>
</template>
