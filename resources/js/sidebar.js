const sidebar = document.getElementById("sidebar");
const textMenu = document.querySelectorAll(".text-menu");

const btnSidebar = document.getElementById("menu-button");


btnSidebar.addEventListener("click", () => {
    textMenu.forEach((el) => {
        el.classList.toggle("opacity-0");
    });

    sidebar.classList.toggle("w-20");
    sidebar.classList.toggle("w-64");
});