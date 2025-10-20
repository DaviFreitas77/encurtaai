export const fetchQrCode = async () => {
  const container = document.querySelector(".containerQRCodes");
  const template = document.getElementById("card-qr-code");

  container.innerHTML = `  <div class="col-span-full h-96 flex items-center justify-center">
    <div class="w-8 h-8 border-4 border-dashed rounded-full animate-spin border-[var(--color-primary)]"></div>
  </div>`;

  try {
    const response = await fetch("/getQrCodeUser", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    const data = await response.json();
     container.innerHTML = ``;
    const qrCodes = data.qrCodes;

    if (!qrCodes || qrCodes.length === 0) {
      console.warn("Nenhum QR Code encontrado.");
      return;
    }

    qrCodes.forEach((qr) => {
      const clone = template.content.cloneNode(true);
      clone.querySelector(".nameCardQR").textContent = qr.name_url ?? "sem nome";
      clone.querySelector(".acessCardQR").textContent = `Acessos: ${qr.click_count ?? 0}`;

      // Código QR em SVG
      clone.querySelector(".qrCode").innerHTML = qr.qr_code_url ?? "<p>QR não disponível</p>";

      
      container.appendChild(clone);
    });
  } catch (error) {
    console.error("Erro ao buscar QR Codes:", error);
  }
};
