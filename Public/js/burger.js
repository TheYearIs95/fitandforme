// #################################### Code menu burger ######################################
const burger = document.querySelector(".burger-icon");
burger.onclick = function (e) {
    e.stopPropagation();
    const navBar = document.querySelector(".nav");
    navBar.classList.toggle("active");
}






