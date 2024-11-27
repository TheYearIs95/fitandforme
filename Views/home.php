<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/head.php");
?>
<title>Fit and Forme</title>
</head>

<body>
    <header class="header">
        <a href="/" class="logo unbounded">Fit and Forme</a>
        <div class="burger-icon">
            <label class="burger" for="burger">
                <input class="line" type="checkbox" id="burger">
            </label>
        </div>

        <nav class="nav">
            <a class="a-nav" href="/">Accueil</a>
            <a class="a-nav" href="/courses">Cours</a>
            <a class="a-nav" href="/events">Evenements</a>
            <a class="a-nav" href="/planning">Planning</a>
            <a class="a-nav" href="/aboutus">À propos</a>
            <a class="a-nav" href="/contact">Contact</a>
        </nav>
    </header>

    <div class="hero-section unbounded">
        <h1>“Faites <br> du sport <br> à votre rythme”</h1>
    </div>

    <main>
        <section class="presentation-section">
            <div class="width-section">
                <h2 class="presentation-subtitle unbounded">Qui sommes nous ?</h2>
                <p class="presentation-text">Bienvenue chez Fit and Forme, votre association sportive à but non lucratif
                    dédiée à la pratique du fitness, de la danse et du renforcement musculaire.
                    <br>
                    <br>Située au cœur de la commune de Bray-St-Aignan, notre association vous propose un espace
                    chaleureux
                    et
                    dynamique, où la forme physique se conjugue avec convivialité et bien-être.
                    <br>
                    <br>Que vous soyez à la recherche d’une séance énergique pour vous défouler, d’une danse rythmée
                    pour
                    vous amuser, ou d’un moment de détente pour vous reconnecter avec vous-même, Fit and Forme est là
                    pour
                    vous
                    accompagner à chaque étape de votre parcours sportif.
                    <br>
                    <br>Ici, la bonne humeur et la convivialité sont toujours au rendez-vous, car nous croyons que
                    l’effort
                    partagé est plus agréable et plus motivant.
                    <br>
                    <br>Alors, rejoignez-nous pour une expérience sportive où l’harmonie du corps et de l’esprit
                    est à l’honneur.
                </p>
            </div>
            <div class="presentation-gradient">
                <div class="slider-container">
                    <div class="first-slider">
                        <img src="/public/img/img-slider/slider-img-1.jpg" class="slider-first-image slider-image" alt="premiere image du slider">
                        <img src="/public/img/img-slider/slider-img-2.jpg" class="slider-second-image slider-image" alt="deuxieme image du slider">
                        <img src="/public/img/img-slider/slider-img-3.jpg" class="slider-third-image slider-image" alt="troisieme image du slider">
                        <img src="/public/img/img-slider/slider-img-4.jpg" class="slider-fourth-image slider-image" alt="quatrieme image du slider">
                        <img src="/public/img/img-slider/slider-img-1.jpg" class="slider-first-image slider-image" alt="premiere image du slider">
                    </div>
                </div>
            </div>
        </section>


        <section class="news-section section-frame width-section">
            <h2 class="news-subtitle unbounded">Actualités</h2>
            <img src="/public/img/news-img.jpg" class="news-img" alt="Photo de sensibilisation cancer de sein">
            <p class="news-text">Octobre Rose est une campagne annuelle de sensibilisation au dépistage du cancer du
                sein qui se déroule
                chaque année au mois d'octobre. <br>
                <br>Elle a pour objectif de sensibiliser le grand public à l'importance du dépistage précoce et de lever
                des
                fonds pour la recherche. <br>
                <br>À travers des événements solidaires, des actions de prévention, et des initiatives de soutien aux
                malades, Octobre Rose rassemble des millions de personnes autour d'une cause commune. <br>
                <br>Ce mois est marqué par la couleur rose, symbole de la lutte contre le cancer du sein, et par un élan
                de
                solidarité à l'échelle mondiale.
            </p>
            <button class="news-button">Voir toutes les actualités</button>
        </section>


        <section class="courses-section courses-gradient section-frame">
            <div class="width-section">
                <h2 class="courses-subtitle unbounded">Nos Cours</h2>
            </div>

            <div class="courses-carousel-container">
                <button class="carousel-arrow carousel-arrow-prev" id="prev">
                    <img src="/public/img/alt-arrow-left-svgrepo-com.svg" alt="flèche cours precedent">
                </button>
                <button class="carousel-arrow carousel-arrow-next" id="next">
                    <img src="/public/img/alt-arrow-right-svgrepo-com.svg" alt="flèche cours suivant">
                </button>
                <div class="courses-container">
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/gym-posturale-carousel.jpg" alt="une image du cours de la gym posturale">
                        </div>
                        <div class="course-name">
                            <p>Gym posturale</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/renforcement-carousel.jpg" alt="une image du cours de renforcement musculaire">
                        </div>
                        <div class="course-name">
                            <p>Renforcement musculaire</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/step-carousel.jpg" alt="une image du cours de Step">
                        </div>
                        <div class="course-name">
                            <p>Step</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/cours-pound.jpg" alt="une image du cours de Pound">
                        </div>
                        <div class="course-name">
                            <p>Pound</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/zumba-carousel.jpg" alt="une image du cours Zumba">
                        </div>
                        <div class="course-name">
                            <p>Zumba</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/renfo-stretching-carousel.jpg" alt="une image du cours Renfo-stretching">
                        </div>
                        <div class="course-name">
                            <p>Renfo-stretching</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/danses-urbaines-carousel.jpg" alt="une image du cours des danses urbaines">
                        </div>
                        <div class="course-name">
                            <p>Danses urbaines</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/dance-fit-carousel.jpg" alt="une image du cours de Dance fit">
                        </div>
                        <div class="course-name">
                            <p>Dance fit</p>
                        </div>
                    </a>
                    <a href="" class="course-slide">
                        <div class="courses-images-container">
                            <img src="/public/img/img-carousel/cardio-boxe-carousel.jpg" alt="une image du cours de cardio boxe">
                        </div>
                        <div class="course-name">
                            <p>Cardio boxe</p>
                        </div>
                    </a>
                </div>
            </div>
            <button class="news-button courses-button">Voir les tarifs</button>
        </section>
    </main>


    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="/Public/js/script.js"></script>
    <script src="/Public/js/burger.js"></script>
</body>

</html>