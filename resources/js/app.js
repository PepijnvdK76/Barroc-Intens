import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/*=====================================
    Sticky
    ======================================= */
window.onscroll = function () {
    const header_navbar = document.querySelector(".navbar-area");
    const test = document.querySelector(".nav-item");
    const sticky = header_navbar.offsetTop;

    if (window.pageYOffset > sticky) {
        header_navbar.classList.add("bg-transparent","textWhite")
        test.classList.add("bg-transparent","textWhite")
    } else {
        header_navbar.classList.remove("bg-transparent","textWhite")
        test.classList.remove("bg-transparent","textWhite")
    }
};
window.document.addEventListener("scroll", onScroll);
