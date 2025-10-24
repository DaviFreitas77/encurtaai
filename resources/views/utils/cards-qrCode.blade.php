<template id="card-qr-code">
  <div class="flex flex-col items-center gap-2 w-full p-4 bg-[var(--color-secondary))] rounded-lg  max-w-[280px] xl:min-w-[270px] md:min-w-[250px] relative">

    <button class="open-dropdown  absolute right-1 top-1  cursor-pointer  bg-[var(--color-background)] hover:opacity-85 rounded-md px-2 py-1.5">
      <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" width="17" height="17" viewBox="0 0 24 24">
        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
      </svg>
    </button>

      <div class="hidden idCardQr"></div>

    <div class="qrCode w-full flex justify-center mt-4">
    </div>
    <div class=" dropdown  hidden  flex-col w-[200px] gap-1 rounded-md bg-[var(--color-secondary)] p-1 absolute -right-5 -top-25">
    </div>

    <p class="nameCardQR text-lg font-semibold text-center">
      Nome do QR
    </p>

    <p class="acessCardQR text-sm">
      10 acessos
    </p>
  </div>
</template>