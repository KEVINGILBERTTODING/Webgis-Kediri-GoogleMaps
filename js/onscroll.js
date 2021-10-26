window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    var navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navbar.classList.add("shadow");
        navbar.classList.add("bg-white");
        navbar.classList.remove("mt-3");
    } else {
        navbar.classList.remove("shadow");
        navbar.classList.remove("bg-white");
        navbar.classList.add("mt-3");
    }
}