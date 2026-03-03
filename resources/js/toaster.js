
const toaster = document.getElementById("toaster");

function Toast(props) {
    const {
        title = "Notificação",
        description = "",
        type = "success", // success | error | warning | info
        duration = 4000
    } = props;

    const types = {
        success: {
            iconBg: "border border-gray-200 text-green-700",
            bar: "bg-green-700 ",
            icon:`<i class="fa-regular fa-circle-check"></i>`
        },
        error: {
            iconBg: "border border-gray-200 text-red-400",
            bar: "bg-red-500",
            icon:`<i class="fa-regular fa-circle-xmark"></i>`
        },
        warning: {
            iconBg: "border border-gray-200 text-yellow-100",
            bar: "bg-amber-500",
            icon:`<i class="fa-solid fa-exclamation"></i>`
        },
     
    };

    const toast = document.createElement("div");
    toast.className =
        "group relative w-96 overflow-hidden rounded-xl border border-zinc-200 bg-white shadow-lg transition-all duration-300 dark:border-zinc-800 dark:bg-zinc-900 animate-in fade-in slide-in-from-right-5";

    toast.innerHTML = `
    <div class="flex items-start gap-4 p-4">
      <div class="flex h-7 w-7 items-center justify-center rounded-full ${types[type].iconBg}">
        ${types[type].icon}
      </div>

      <section class="flex-1">
        <h2 class="text-sm font-semibold text-zinc-900 dark:text-zinc-100">
          ${title}
        </h2>
        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
          ${description}
        </p>
      </section>

      <button
        class="rounded-md p-1 cursor-pointer text-zinc-500 transition hover:bg-zinc-100 hover:text-zinc-900 dark:hover:bg-zinc-800 dark:hover:text-white">
        x
      </button>
    </div>

    <div class="absolute bottom-0 left-0 h-1 w-full ${types[type].bar}"></div>
  `;

    const closeBtn = toast.querySelector("button");

    function remove() {
        toast.classList.add("opacity-0", "translate-x-5");
        setTimeout(() => toast.remove(), 200);
    }

    closeBtn.addEventListener("click", remove);

    toaster.appendChild(toast);

    if (duration) {
        setTimeout(remove, duration);
    }


}


window.toast = Toast;