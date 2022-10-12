import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/*=====================================
    Sticky
    ======================================= */
window.onscroll = function () {
    const header_navbar = document.querySelector(".navbar-area");
    const sticky = header_navbar.offsetTop;
    if (window.pageYOffset > sticky) {
        header_navbar.classList.add("bg-transparent");
    } else {
        header_navbar.classList.remove("bg-transparent");
    }
};
window.document.addEventListener("scroll", onScroll);
