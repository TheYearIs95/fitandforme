// ##################################### Code Carousel ####################################

const carousel = document.querySelector(".courses-container");
const nextButton = document.querySelector(".carousel-arrow-next");
const prevButton = document.querySelector(".carousel-arrow-prev");
const slide = document.querySelector(".course-slide");
const next = document.getElementById("next");
const previous = document.getElementById("prev");


// Écouteurs d'évenents
nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", (e) => nextSlide(e, false));


// Fonctions
function nextSlide(_, positive = true) {
    const slideWidth = slide.clientWidth;
    carousel.scrollLeft = positive ? carousel.scrollLeft + slideWidth
        : carousel.scrollLeft - slideWidth;
}

// ######################################################################################

