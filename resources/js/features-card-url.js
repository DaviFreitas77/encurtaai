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
