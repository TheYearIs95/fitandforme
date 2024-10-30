// #################################### Code menu burger ######################################
burger = document.querySelector(".burger-icon");
burger.onclick = function () {
    navBar = document.querySelector(".nav");
    navBar.classList.toggle("active");
}