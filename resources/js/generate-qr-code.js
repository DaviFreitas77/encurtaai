const formQrCode = document.getElementById("section-form-qr-code");
const submitFormQrCode = document.getElementById("submit-form-qr-code");
const showQrCode = document.getElementById("qr_code");

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
        showQrCode.classList.remove("hidden");
        showQrCode.classList.add("flex");
    } catch (error) {
        console.error("Error generating QR code:", error);
    }
});
