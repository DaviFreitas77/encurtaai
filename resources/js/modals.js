//modal auth
const modalAuth = document.querySelector(".modalLogin");
const btnOpen = document.querySelectorAll("#openModalLogin");
const btnClose = document.getElementById("closeModalLogin");

// Abre o modal auth
btnOpen.forEach((btn) =>
    btn.addEventListener("click", () => {
        modalAuth.classList.remove("hidden");
        modalAuth.classList.add("flex");
    })
);

// Fecha o modal auth
btnClose.addEventListener("click", () => {
    modalAuth.classList.add("hidden");
    modalAuth.classList.remove("flex");
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
