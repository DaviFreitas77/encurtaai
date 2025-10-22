import { fetchUrls } from "./fetch-urls";
import fetchCardAnalytics from "./fetch-card-analytics";
const showQrCode = document.getElementById("qr_code");
const modalQrCode = document.querySelector(".modal-qr-code");

//copiar url encurtada
document.addEventListener("click", (e) => {
  const btn = e.target.closest(".copy-button");
  if (!btn) return;

  const card = btn.closest(".flex.flex-col");
  if (!card) return;

  const slugElement = card.querySelector(".slug");
  const url = slugElement?.textContent?.trim();

  if (url) {
    navigator.clipboard.writeText(url).then(() => {
      btn.textContent = "Copiado!";
      setTimeout(() => {
        btn.textContent = "Copiar";
      }, 2000);
    });
  }
});

document.addEventListener("click", (e) => {
  const isDropdownButton = e.target.closest(".open-dropdown");
  const isDropdown = e.target.closest(".dropdown");

  if (!isDropdownButton && !isDropdown) {
    // Clicou fora: fecha todos os dropdowns
    document.querySelectorAll(".dropdown").forEach((d) => {
      d.classList.add("hidden");
    });
    return;
  }

  if (isDropdownButton) {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    const card = isDropdownButton.closest(".flex.flex-col");
    if (!card) return;

    const dropdown = card.querySelector(".dropdown");
    if (!dropdown) return;

    const idEl = card.querySelector(".id");
    const id = idEl?.textContent?.trim();

    const urlEl = card.querySelector(".urlOriginal");
    const url = urlEl?.textContent?.trim();

    const nameEl = card.querySelector(".nameCard");
    const name = nameEl?.textContent?.trim();

    const slug = card.querySelector(".slug")?.textContent?.trim().split("/").pop();

    const qrCode = card.querySelector(".qrCode")?.value?.trim();

    dropdown.innerHTML = "";
    const dropdownItems = [
      {
        label: "Excluir",
        icon: `
           <svg class="h-[15px] w-[15px]" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2">
            <path fill="#7D8590" d="m1.5 13v1a.5.5 0 0 0 .3379.4731 18.9718 18.9718 0 0 0 6.1621 1.0269 18.9629 18.9629 0 0 0 6.1621-1.0269.5.5 0 0 0 .3379-.4731v-1a6.5083 6.5083 0 0 0 -4.461-6.1676 3.5 3.5 0 1 0 -4.078 0 6.5083 6.5083 0 0 0 -4.461 6.1676zm4-9a2.5 2.5 0 1 1 2.5 2.5 2.5026 2.5026 0 0 1 -2.5-2.5zm2.5 3.5a5.5066 5.5066 0 0 1 5.5 5.5v.6392a18.08 18.08 0 0 1 -11 0v-.6392a5.5066 5.5066 0 0 1 5.5-5.5z"></path>
        </svg>
        `,
        onClick: () => {
          deleteCard(id, token);
        },
      },
      {
        label: qrCode ? "Ver QR Code" : "Criar QR Code",
        icon: `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 ">
            <rect x="3" y="3" width="7" height="7" rx="1"></rect>
            <rect x="14" y="3" width="7" height="7" rx="1"></rect>
            <rect x="3" y="14" width="7" height="7" rx="1"></rect>
            <path d="M14 14h1v4M17 21h1M20 14v1M14 17h4"></path>
            <path d="M2 12h20" stroke-width="1.5"></path>
        </svg>
        `,
        onClick: qrCode
          ? () => showCodeQr(qrCode)
          : () => {
              createCodeQr(url, name, slug, token);
            },
      },
      {
        label: "Compartilhar",
        icon: `
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="18" cy="5" r="3"></circle>
            <circle cx="6" cy="12" r="3"></circle>
            <circle cx="18" cy="19" r="3"></circle>
            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
        </svg>
        `,
        onClick: () => {
          alert("Compartilhar clicado");
        },
      },
    ];

    dropdownItems.forEach((item) => {
      const button = document.createElement("button");
      button.className = `flex w-full items-center gap-2 rounded p-[10px]  relative
                 hover:bg-[var(--color-primary)] 
                 focus:outline-none transition-colors duration-150
                 before:content-[''] before:absolute before:left-0 before:top-[15%] before:h-[70%] before:w-[3px]
                 before:bg-[#2F81F7] before:rounded-r-full before:opacity-0
                 focus:before:opacity-100 active:before:opacity-100 before:transition-opacity before:duration-200  cursor-pointer`;

      button.innerHTML = `${item.icon}${item.label}`;

      if (typeof item.onClick === "function") {
        button.addEventListener("click", item.onClick);
      }
      dropdown.appendChild(button);
    });

    const isHidden = dropdown.classList.contains("hidden");

    document.querySelectorAll(".dropdown").forEach((d) => {
      d.classList.add("hidden");
    });

    if (isHidden) {
      dropdown.classList.remove("hidden");
    }
  }
});

function deleteCard(id, token) {
  if (id) {
    fetch(`/deleteUrl/${id}`, {
      method: "DELETE",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": token,
      },
    })
      .then((response) => {
        if (response.ok) {
          fetchUrls();
          fetchCardAnalytics();
        } else {
          console.error("Erro ao deletar URL");
        }
      })
      .catch((error) => {
        console.error("Erro ao deletar URL:", error);
      });
  }
}

function createCodeQr(url, nameCard, slug, token) {
  if (url) {
    fetch(`/create-qr-code-url-existing`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": token,
      },
      body: JSON.stringify({ url, nameCard, slug }),
    })
      .then((response) => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error("Erro ao criar código QR");
        }
      })
      .then((data) => {
        fetchUrls();
        showQrCode.innerHTML = data.qr_code;
        modalQrCode.classList.remove("hidden");
        modalQrCode.classList.add("flex");
      })
      .catch((error) => {
        console.error("Erro ao criar código QR:", error);
      });
  }
}

function showCodeQr(qrCode) {
  showQrCode.innerHTML = qrCode;
  modalQrCode.classList.remove("hidden");
  modalQrCode.classList.add("flex");
}
