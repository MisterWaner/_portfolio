const navToggler = document.querySelector(".nav-toggler");
const navOpenerIcon = document.querySelector("#nav-opener-icon");
const navCloserIcon = document.querySelector("#nav-closer-icon");
const nav = document.querySelector("nav");
const links = document.querySelectorAll("nav ul li a");

function toggleNav() {
    navOpenerIcon.classList.toggle("toggled");
    navCloserIcon.classList.toggle("toggled");
    nav.classList.toggle("open");
}

links.forEach((link) => {
    link.addEventListener("click", toggleNav);
});

navToggler.addEventListener("click", toggleNav)