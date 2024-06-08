const navToggler = document.querySelector(".nav-toggler");
const navOpenerIcon = document.querySelector("#nav-opener-icon");
const navCloserIcon = document.querySelector("#nav-closer-icon");
const nav = document.querySelector("nav");
const links = document.querySelectorAll("nav ul li a");

//Nav Toggler
function toggleNav() {
    navOpenerIcon.classList.toggle("toggled");
    navCloserIcon.classList.toggle("toggled");
    nav.classList.toggle("open");
}

links.forEach((link) => {
    link.addEventListener("click", toggleNav);
});

navToggler.addEventListener("click", toggleNav)

//About Modal
const aboutModalOpener = document.querySelector("#about_modal_opener");
const aboutModalCloser = document.querySelector("#about_modal_closer");
const aboutModal = document.querySelector("#about_modal");
const html = document.querySelector("html");

aboutModalOpener.addEventListener("click", () => {
    aboutModal.classList.add("show");
    html.classList.add("no-scroll")
})

aboutModalCloser.addEventListener("click", () => {
    aboutModal.classList.remove("show");
    html.classList.remove("no-scroll")
})


