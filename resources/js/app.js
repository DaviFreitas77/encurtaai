const modalAuth = document.querySelector(".modalLogin");
const btnOpen = document.getElementById("openModalLogin");
const btnClose = document.getElementById("closeModalLogin");

const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");
const formSendMail = document.getElementById("formSendMail");
const formCode = document.getElementById("formCode");
const formResetPassword = document.getElementById("formResetPassword");

const btnToggleToRegister = document.getElementById("buttonRegister");
const btnToggleToLogin = document.getElementById("buttonLogin");
const btnToggleToPassword = document.getElementById("show-form-password");
const btntoggletoFormCode = document.getElementById("show-form-code");
const btnToggleFormResetPassword = document.getElementById(
    "showFormResetPassword"
);

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

btnToggleToPassword.addEventListener("click", () => {
    showForm("password");
});

btntoggletoFormCode.addEventListener("click", () => {
    showForm("code");
});

btnToggleFormResetPassword.addEventListener("click", () => {
    showForm("resetPassword");
});

function showForm(type) {
    const showLogin = type === "login";
    const showRegister = type === "register";
    const showSendMail = type === "password";
    const showCode = type === "code";
    const showResetPassword = type === "resetPassword";

    // Alterna visibilidade do formulário de login
    formLogin.classList.toggle("hidden", !showLogin);
    formLogin.classList.toggle("flex", showLogin);

    // Alterna visibilidade do formulário de registro
    formRegister.classList.toggle("hidden", !showRegister);
    formRegister.classList.toggle("flex", showRegister);

    // Alterna visibilidade do formulário de recuperação de senha
    formSendMail.classList.toggle("hidden", !showSendMail);
    formSendMail.classList.toggle("flex", showSendMail);

    formCode.classList.toggle("hidden", !showCode);
    formCode.classList.toggle("flex", showCode);

    formResetPassword.classList.toggle("hidden", !showResetPassword);
    formResetPassword.classList.toggle("flex", showResetPassword);
}
