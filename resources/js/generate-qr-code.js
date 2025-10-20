
import { fetchQrCode } from "./fetch-qr-code.js";
const formQrCode = document.getElementById("section-form-qr-code");
const submitFormQrCode = document.getElementById("submit-form-qr-code");
const showQrCode = document.getElementById("qr_code");
const modalQrCode = document.querySelector(".modal-qr-code");

function showError(fieldName, message) {
  const errorElement = formQrCode.querySelector(`[data-error-for="${fieldName}"]`);
  if (errorElement) {
    errorElement.textContent = message;
  }
}

formQrCode.addEventListener("submit", async (e) => {
  e.preventDefault();
  submitFormQrCode.textContent = "Carregando...";

  const formData = new FormData(formQrCode);

  try {
    const response = await fetch("/r/get-qr-code", {
      method: "POST",
      headers: {
        Accept: "application/json",
        "x-csrf-token": formData.get("_token"),
      },
      body: formData,
    });

    if (response.ok) {
      const data = await response.json();
      showQrCode.innerHTML = data.qr_code;
      modalQrCode.classList.remove("hidden");
      modalQrCode.classList.add("flex");
      fetchQrCode();
    }
    if (!response.ok) {
      if (response.status === 422) {
        const errorResponse = await response.json();
        const errors = errorResponse.errors;
        for (const fieldName in errors) {
          const message = errors[fieldName][0];
          showError(fieldName, message);
        }
      }
    }
  } catch (error) {
    console.error("Error generating QR code:", error);
  }finally{
    submitFormQrCode.textContent = "Gerar QR Code";
  }
});
