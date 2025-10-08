const bodyElement = document.querySelector("body");
const buttonElement = document.querySelector("#togle-theme");

buttonElement.addEventListener("click", () => {
    bodyElement.classList.toggle("dark");
    if (bodyElement.classList.contains("dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
});

const theme = localStorage.getItem("theme");
if (theme === "dark") {
    bodyElement.classList.add("dark");
} else {
    bodyElement.classList.remove("dark");
}
