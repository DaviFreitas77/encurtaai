import { fetchUrls } from "./fetch-urls";
import { fetchQrCode } from "./fetch-qr-code";
const modalShare = document.querySelector("#modal-share");
import { shareUrl } from "./shareUrl";
document.addEventListener("click", (e) => {
  const template = document.getElementById("card-qr-code");

  const btnOpenDropDown = e.target.closest(".open-dropdown");
  if (!btnOpenDropDown) return;

  const card = btnOpenDropDown.closest(".flex.flex-col");
  if (!card) return;

  const dropdown = card.querySelector(".dropdown");
  if (!dropdown) return;

  const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

  const nameEl = card.querySelector(".nameCardQR");
  const name = nameEl?.textContent?.trim();

  const idEl = card.querySelector(".idCardQr");
  const id = idEl?.textContent?.trim();

  const qrCodeEl = card.querySelector(".qrCode svg"); // <--- pega o SVG real
  const qrCode = card.querySelector(".qrCode")?.innerHTML?.trim();

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
      label: "Donwload",
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
        downloadSVGasPNG(qrCodeEl)
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

  document.addEventListener("click", (e) => {
    if (!e.target.closest(".open-dropdown") && !e.target.closest(".dropdown")) {
      document.querySelectorAll(".dropdown").forEach((d) => d.classList.add("hidden"));
    }
  });
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
          fetchQrCode();
        } else {
          console.error("Erro ao deletar URL");
        }
      })
      .catch((error) => {
        console.error("Erro ao deletar URL:", error);
      });
  }
}

function downloadSVGasPNG(svgEl, fileName = "qrcode.png") {
  if (!svgEl) return alert("SVG não encontrado!");


  const serializer = new XMLSerializer();
  const svgString = serializer.serializeToString(svgEl);


  const svgBlob = new Blob([svgString], { type: "image/svg+xml;charset=utf-8" });
  const url = URL.createObjectURL(svgBlob);

  
  const img = new Image();
  img.onload = function () {

    const canvas = document.createElement("canvas");
    canvas.width = svgEl.width.baseVal.value || 200; // largura do SVG
    canvas.height = svgEl.height.baseVal.value || 200; // altura do SVG
    const ctx = canvas.getContext("2d");

  
    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);


    canvas.toBlob((blob) => {
      const pngUrl = URL.createObjectURL(blob);
      const link = document.createElement("a");
      link.href = pngUrl;
      link.download = fileName;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);

      URL.revokeObjectURL(pngUrl);
      URL.revokeObjectURL(url); 
    });
  };

  img.onerror = function () {
    alert("Erro ao converter SVG para PNG");
  };

  img.src = url;
}

