<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/head.php");
?>
    <link rel="stylesheet" href="/public/css/cours.css">
    <title>Nos cours</title>


</head>

<body>
    <header class="header">
        <a href="/" class="logo unbounded">Fit and Forme</a>
        <div class="burger-icon">
            <label class="burger" for="burger">
                <input class="line" type="checkbox" id="burger" />
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
        <h1>“Chaque <br> effort te rapproche <br> de ton objectif”</h1>
    </div>

    <section class="pre-courses width-section">
        <div class="notice-section">
            <p class="guidelines">Cours assurés par des éducateurs brevetés</p>
            <p class="guidelines">Cours adultes et adolescents à partir de 15 ans</p>
            <p class="guidelines">Cours junior à partir de 7 ans</p>
            <p class="guidelines">*Le cours de step se passe à la Salle Polyvalente de Saint Aignan des Gués</p>
            <p class="guidelines orange-guideline">COURS D’ESSAI OFFERT !</p>
        </div>
    </section>

    <section class="courses width-section">

        <div class="courses-grid-container">

            <h2 class="courses-subtitle unbounded">Nos cours</h2>

            <article class="gym-posturale-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-gym-posturale.jpg" class="gym-posturale-image courses-images"
                            alt="Une photo d'une femme qui s'étire">
                    </a>
                </div>
                <h3 class="courses-names">Gym posturale</h3>
            </article>

            <article class="renforcement-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-renforcement.jpg" class="renforcement-image courses-images"
                            alt="Une photo d'une femme avec une haltère">
                    </a>
                </div>
                <h3 class="courses-names">Renforcement musculaire</h3>
            </article>

            <article class="step-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-step.jpg" class="step-image courses-images"
                            alt="Une photo d'une femme qui fait du step">
                    </a>
                </div>
                <h3 class="courses-names">Step</h3>
            </article>

            <article class="pound-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-pound.jpg" class="pound-image courses-images"
                            alt="Une photo d'une femme avec deux sticks vert">
                    </a>
                </div>
                <h3 class="courses-names">Pound</h3>
            </article>

            <article class="zumba-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-zumba.jpg" class="zumba-image courses-images"
                            alt="Une photo d'une femme qui danse la Zumba">
                    </a>
                </div>
                <h3 class="courses-names">Zumba</h3>
            </article>

            <article class="stretching-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-stretching.jpg" class="stretching-image courses-images"
                            alt="Une photo d'une femme qui stretch">
                    </a>
                </div>
                <h3 class="courses-names">Renfo-stretching</h3>
            </article>

            <article class="danses-urbaines-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-danses-urbaines.jpg" class="danses-urbaines-image courses-images"
                            alt="Une photo d'une fille qui danse">
                    </a>
                </div>
                <h3 class="courses-names">Danses urbaines</h3>
            </article>

            <article class="dance-fit-div container-div">
                <div class="images-container">
                    <a href="">
                        <img src="/public/img/cours-dance-fit.jpg" class="dance-fit-image courses-images"
                            alt="Une photo d'une femme qui danse">
                    </a>
                </div>
                <h3 class="courses-names">Dance fit</h3>
            </article>

            <article class="boxe-div container-div">
                <div class="images-container">
                    <a href=""><img src="/public/img/cours-boxe.jpg" class="boxe-image courses-images" alt="Une photo d'une bande de boxe"></a>
                </div>
                <h3 class="courses-names">Cardio boxe</h3>
            </article>
        </div>
    </section>



    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="./script.js"></script>
    <script src="/Public/js/burger.js"></script>
</body>

</html>