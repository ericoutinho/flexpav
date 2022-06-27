const navMenu = document.querySelector(".nav-links");
const navButton = document.querySelector(".nav-button");

navButton.addEventListener("click", () => {
    navMenu.classList.toggle("active");
})