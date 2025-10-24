export function shareUrl(choose = "", url) {
  if (!url) return;

  if (choose === "whatsapp") {
    const encodedUrl = encodeURIComponent(url);
    const whatsappLink = `https://wa.me/?text=${encodedUrl}`;
    window.open(whatsappLink, "_blank");
  }

  if (choose === "facebook") {
    const encodedUrl = encodeURIComponent(url);
    const facebookLink = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`;
    window.open(facebookLink, "_blank");
  }

  if (choose === "copy") {
    navigator.clipboard
      .writeText(url)
      .then(() => {})
      .catch((err) => {
        console.error("Erro ao copiar:", err);
      });
  }
}
