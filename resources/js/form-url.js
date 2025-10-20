import { toggle_modal_limited_url } from "./modals.js";
import { fetchUrls } from "./fetch-urls.js";
import fetchCardAnalytics from "./fetch-card-analytics.js";

document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelectorAll(".form_shortened_url");
  const linkShortened = document.getElementById("link_shortened");
  const divLinkShortened = document.getElementById("div-link-shortened");
  const submitButton = document.querySelectorAll(".submit-form");

  function clearErrors() {
    const allErrorElements = []
    form.forEach((formEl) => {
      const errorElements = formEl.querySelectorAll("[data-error-for]");
      allErrorElements.push(...errorElements);
    });

    allErrorElements.forEach((errorElement) => {
      errorElement.textContent = "";
    });
  }

function showError(fieldName, message) {
  let errorElement = null;

  
  form.forEach((formEl) => {
    const found = formEl.querySelector(`[data-error-for="${fieldName}"]`);
    if (found) {
      errorElement = found;
    }
  });


  if (errorElement) {
    errorElement.textContent = message;
  }
}

  function showShortenedLink(url) {
    divLinkShortened.classList.remove("hidden");
    divLinkShortened.classList.add("flex");
    linkShortened.textContent = url;
    linkShortened.classList.remove("hidden");
  }

  form.forEach((form) => {
    form.addEventListener("submit", async (event) => {
      event.preventDefault();

      clearErrors();
      submitButton.forEach((btn) => (btn.textContent = "Carregando..."));


      const formData = new FormData(form);

      try {
        const response = await fetch("/shortenedUrl", {
          method: "POST",
          headers: {
            Accept: "application/json",
            "x-csrf-token": formData.get("_token"),
          },
          body: formData,
        });

        if (!response.ok) {
          if (response.status === 422) {
            const errorResponse = await response.json();
            const errors = errorResponse.errors;

            for (const fieldName in errors) {
              const message = errors[fieldName][0];
              showError(fieldName, message);
            }
          } else if (response.status === 429) {
            toggle_modal_limited_url();
          }
        } else {
          const data = await response.json();
          const urlShortened = data.url_shortened;
          showShortenedLink(urlShortened);
          form.reset();
          fetchUrls();
          fetchCardAnalytics();
        }
      } catch (error) {
        console.log(error);
      } finally {
         submitButton.forEach((btn) => (btn.textContent = "Criar link curto"));
      }
    });
  });

  document.addEventListener("click", async (e) => {
    const btnCopy = e.target.closest(".btn_copy");
    if (!btnCopy) return;

    // div que contém o link e o botão
    const wrapper = btnCopy.closest("#div-link-shortened");
    if (!wrapper) return;

    // Pega o <a id="link_shortened"> dentro do wrapper
    const linkEl = wrapper.querySelector("#link_shortened");
    if (!linkEl) return;

    const url = linkEl.textContent.trim();

    if (!url) {
      alert("URL vazia.");
      return;
    }

    try {
      await navigator.clipboard.writeText(url);
      btnCopy.textContent = "Copiado!";
      setTimeout(() => {
        btnCopy.textContent = "Copiar";
      }, 2000);
    } catch (err) {
      console.error("Erro ao copiar:", err);
      alert("Erro ao copiar o link.");
    }
  });
});
