document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("fixed-header");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
            navbar.classList.add("scrolled-down");
        } else {
            navbar.classList.remove("scrolled-down");
        }
    });
});
function openNav() {
    document.getElementById("mySidenav").style.width = "26%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}