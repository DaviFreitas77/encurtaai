
const formLogin = document.getElementById("formLogin");
const formRegister = document.getElementById("formRegister");
const formForgotPassword = document.getElementById("formForgotPassword")

const btnToggleToRegister = document.getElementById("buttonRegister");
const btnToggleToLogin = document.getElementById("buttonLogin");
const btnToggleToPassword = document.getElementById("show-forgot-password");


btnToggleToRegister.addEventListener("click", () => {
    showForm("register");
});

btnToggleToLogin.addEventListener("click", () => {
    showForm("login");
});

btnToggleToPassword.addEventListener("click", () => {
    showForm("forgot-password");
});



export function showForm(type) {
    const showLogin = type === "login";
    const showRegister = type === "register";
    const showResetPassword = type === "forgot-password";

    formLogin.classList.toggle("hidden", !showLogin);
    formLogin.classList.toggle("flex", showLogin);

    formRegister.classList.toggle("hidden", !showRegister);
    formRegister.classList.toggle("flex", showRegister);

    formForgotPassword.classList.toggle("hidden", !showResetPassword);
    formForgotPassword.classList.toggle("flex", showResetPassword);
}
