const elementDropdown = document.getElementById("dropdown");

const elementOrder = document.querySelectorAll(".order")

elementOrder.forEach(element => {
    element.addEventListener('change', (event) => {
        console.log(event.target.value);
    });
});


const buttonOpenDropDown = document
    .getElementById("open-dropdown")
    .addEventListener("click", () => {
        if (elementDropdown.classList.contains("hidden")) {
            elementDropdown.classList.add("flex");
            elementDropdown.classList.remove("hidden");

        } else {
            elementDropdown.classList.add("hidden");
            elementDropdown.classList.remove("flex");
        }
    });


