// #################################### Code menu burger ######################################
burger = document.querySelector(".burger-icon");
burger.onclick = function (e) {
    console.log(e);
    e.stopPropagation();
    navBar = document.querySelector(".nav");
    navBar.classList.toggle("active");
}