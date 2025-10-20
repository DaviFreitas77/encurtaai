const drop = document.getElementById("dropdown");
import { fetchUrls } from "./fetch-urls";
import fetchCardAnalytics from "./fetch-card-analytics";

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
    const card = isDropdownButton.closest(".flex.flex-col");
    if (!card) return;

    const dropdown = card.querySelector(".dropdown");
    if (!dropdown) return;

    const isHidden = dropdown.classList.contains("hidden");

    document.querySelectorAll(".dropdown").forEach((d) => {
      d.classList.add("hidden");
    });

    if (isHidden) {
      dropdown.classList.remove("hidden");
    }
  }
});

document.addEventListener("click", (e) => {
  const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
  const btnDeleteLink = e.target.closest(".delete-link");

  if (btnDeleteLink) {
    const card = btnDeleteLink.closest(".flex.flex-col");
    if (!card) return;

    const idEl = card.querySelector(".id");
    const id = idEl?.textContent?.trim();

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
});
