const btnChoiceShoternedUrl = document.getElementById("choice-shoterned-url");
const btnChoiceQrCode = document.getElementById("choice-qr-code");
const sectionFormUrl = document.getElementById("section-form-url");
const sectionFormQrCode = document.getElementById("section-form-qr-code");


if(!btnChoiceShoternedUrl || !btnChoiceQrCode || !sectionFormUrl || !sectionFormQrCode){
  return;
}

btnChoiceQrCode.addEventListener("click", () => {
  btnChoiceQrCode.classList.add("bg-[var(--color-primary)]", "text-white");
  btnChoiceShoternedUrl.classList.remove("bg-[var(--color-primary)]", "text-white");
  btnChoiceShoternedUrl.classList.add("text-gray-500");
  sectionFormQrCode.classList.remove("hidden");
  sectionFormUrl.classList.add("hidden");
});

btnChoiceShoternedUrl.addEventListener("click", () => {
  btnChoiceShoternedUrl.classList.add("bg-[var(--color-primary)]", "text-white");
  btnChoiceQrCode.classList.remove("bg-[var(--color-primary)]", "text-white");
  sectionFormUrl.classList.remove("hidden");
  sectionFormQrCode.classList.add("hidden");
});
