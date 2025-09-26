import { toggle_modal_limited_url } from "./modals.js";
const form = document.getElementById("form_shortened_url");
const linkShortened = document.getElementById("link_shortened");
const divLinkShortened = document.getElementById("div-link-shortened");
const submitButton = document.getElementById("submit-form");

function clearErrors() {
    const allErrorElements = form.querySelectorAll("[data-error-for]");
    allErrorElements.forEach((el) => (el.textContent = ""));
}

function showError(fieldName, message) {
    const errorElement = form.querySelector(`[data-error-for="${fieldName}"]`);
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

form.addEventListener("submit", async (event) => {
    event.preventDefault();

    clearErrors();
    submitButton.textContent = "Carregando...";

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
        }
    } catch (error) {
        console.log(error);
    } finally {
        submitButton.textContent = "Criar link curto";
    }
});
