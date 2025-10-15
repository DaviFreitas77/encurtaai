document.addEventListener("DOMContentLoaded", () => {
  const modalCreateUrl = document.getElementById("modal-create-url");
  const btnCloseModalCreateUrl = document.querySelector(".close-modal-create-url");
  const btnOpenModalCreateUrl = document.querySelectorAll(".open-modal-create-url");
  if (btnOpenModalCreateUrl && modalCreateUrl && btnCloseModalCreateUrl) {
    btnOpenModalCreateUrl.forEach((btn) =>
      btn.addEventListener("click", () => {
        modalCreateUrl.classList.remove("hidden");
        modalCreateUrl.classList.add("flex");
      })
    );

    btnCloseModalCreateUrl.addEventListener("click", () => {
      modalCreateUrl.classList.add("hidden");
      modalCreateUrl.classList.remove("flex");
    });
  }

  //modal qrcode
  const modalQrCode = document.querySelector(".modal-qr-code");
  const btnCloseModalQrCode = document.getElementById("close-modal-qr-code");
  if (modalQrCode && btnCloseModalQrCode) {
    btnCloseModalQrCode.addEventListener("click", () => {
      modalQrCode.classList.add("hidden");
      modalQrCode.classList.remove("flex");
    });
  }

  //modal auth
  const modalAuth = document.querySelector(".modalLogin");
  const btnOpen = document.querySelectorAll("#openModalLogin");
  const btnClose = document.getElementById("closeModalLogin");
  if (modalAuth && btnOpen && btnClose) {
    btnOpen.forEach((btn) =>
      btn.addEventListener("click", () => {
        modalAuth.classList.remove("hidden");
        modalAuth.classList.add("flex");
      })
    );

    btnClose.addEventListener("click", () => {
      modalAuth.classList.add("hidden");
      modalAuth.classList.remove("flex");
    });
  }

  //modal choose-function generate qr or shoterned url
  const modalChooseFunction = document.getElementById("modal-choose-function");
  const btnOpenModalChooseFunction = document.querySelectorAll(".open-modal-choose-function");
  const btnCloseModalChooseFunction = document.querySelector(".close-modal-choose-function");

  if (btnCloseModalChooseFunction && modalChooseFunction && btnOpenModalChooseFunction) {
    btnOpenModalChooseFunction.forEach((btn) => {
      btn.addEventListener("click", () => {
        modalChooseFunction.classList.remove("hidden");
        modalChooseFunction.classList.add("flex");
      });
    });

    btnCloseModalChooseFunction.addEventListener("click", () => {
      modalChooseFunction.classList.add("hidden");
      modalChooseFunction.classList.remove("flex");
    });
  }
});

//modal limite de url
export function toggle_modal_limited_url() {
  const modal = document.getElementById("modal-limited-url");
  const btnCloseModal = document.querySelectorAll(".close-modal-url-limited");

  if (modal.classList.contains("hidden")) {
    modal.classList.add("flex");
    modal.classList.remove("hidden");
  }

  //fecha modal limite de url
  btnCloseModal.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    });
  });
}
