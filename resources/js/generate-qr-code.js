import { fetchUrls } from './fetch-urls.js';
const formQrCode = document.getElementById("section-form-qr-code");
const submitFormQrCode = document.getElementById("submit-form-qr-code");
const showQrCode = document.getElementById("qr_code");
const modalQrCode = document.querySelector(".modal-qr-code");

formQrCode.addEventListener("submit", async (e) => {
  e.preventDefault();

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
    const data = await response.json();
    showQrCode.innerHTML = data.qr_code;
    modalQrCode.classList.remove("hidden");
    modalQrCode.classList.add("flex");
    fetchUrls();
  } catch (error) {
    console.error("Error generating QR code:", error);
  }
});
