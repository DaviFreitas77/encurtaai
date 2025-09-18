const modalAuth = document.querySelector(".modalLogin");
const btnOpen = document.getElementById("openModalLogin");
const btnClose = document.getElementById("closeModalLogin");
const formLogin = document.getElementById("loginForm");
const formRegister = document.getElementById("registerForm");
const btnToggleToRegister = document.getElementById("buttonRegister");
const btnToggleToLogin = document.getElementById("buttonLogin");

// Abre o modal
btnOpen.addEventListener("click", () => {
  modalAuth.classList.remove("hidden");
  modalAuth.classList.add("flex");
});

// Fecha o modal
btnClose.addEventListener("click", () => {
  modalAuth.classList.add("hidden");
  modalAuth.classList.remove("flex");
});


btnToggleToRegister.addEventListener("click", () => {
  showForm("register");
});


btnToggleToLogin.addEventListener("click", () => {
  showForm("login");
});


function showForm(type) {
  const showLogin = type === "login";

  formLogin.classList.toggle("hidden", !showLogin);
  formLogin.classList.toggle("flex", showLogin);

  formRegister.classList.toggle("hidden", showLogin);
  formRegister.classList.toggle("flex", !showLogin);
}