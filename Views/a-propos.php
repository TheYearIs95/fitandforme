<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/head.php");
?>
<link rel="stylesheet" href="/Public/css/a-propos.css">
<title>À propos</title>
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

    <main>
        <div class="hero-section unbounded hero-section-a-propos"></div>
        <section class="about-us-section width-section">
            <h1 class="unbounded presentation-subtitle">À propos de nous</h1>
            <p class="about-us-text">Fondée en 2011, Fit and Forme est une association loi 1901 affiliée à la Fédération Sport pour Tous. <br>
                <br>
                Gérée bénévolement par un bureau de trois membres dévoués, l'association œuvre avec passion pour
                promouvoir le bien-être et l'activité physique au sein de la communauté. <br>
                <br>
                Grâce à cet engagement collectif, nous créons un espace où chacun peut pratiquer le sport dans une
                ambiance conviviale, accessible à tous. <br>
                <br>
                Fit and Forme propose une large gamme de cours de gymnastique d'entretien à la salle polyvalente de
                Bray-en-Val. <br>
                <br>
                L'association a démarré modestement avec un cours unique de renforcement musculaire et 31 adhérents.
                <br>
                <br>
                Au fil des années, elle s'est enrichie pour inclure de nouvelles disciplines comme le Step, la Zumba, le
                Yoga, et la danse, attirant ainsi un nombre croissant de participants. <br>
                <br>
                Aujourd'hui, en 2023, nous comptons fièrement 153 adhérents, unis par une même passion pour le
                bien-être. <br>
                <br>
                La diversité des activités permet à chacun de trouver la formule qui lui convient, quel que soit son âge
                ou son niveau de forme. <br>
                <br>
                Chez Fit and Forme, vous pouvez composer votre programme personnalisé et progresser à votre rythme dans
                une ambiance conviviale et dynamique.
            </p>
        </section>

        <section class="team-section width-section">
            <h2 class="presentation-subtitle unbounded">L'équipe</h2>
            <article class="personal-card">
                <div class="personal-photo">
                    <img class="" src="/public/img/img-à-propos/marie-ange.png"
                        alt="Une photo de la présidente de l'association">
                </div>
                <div class="personal-info unbounded">
                    <p>Présidente</p>
                    <h3>Marie-Ange</h3>
                </div>
            </article>
            <article class="personal-card">
                <div class="personal-photo">
                    <img class="" src="/public/img/img-à-propos/aline.png" alt="Une photo de la trésorière de l'association">
                </div>
                <div class="personal-info unbounded">
                    <p>Trésorière</p>
                    <h3>Aline</h3>
                </div>
            </article>
            <article class="personal-card">
                <div class="personal-photo"><img class="" src="/public/img/img-à-propos/valérie.png"
                        alt="Une photo de la secrétaire de l'association"></div>
                <div class="personal-info unbounded">
                    <p>Secrétaire</p>
                    <h3>Valérie</h3>
                </div>
            </article>
            <article class="personal-card">
                <div class="personal-photo"><img class="" src="/public/img/img-à-propos/elodie.png"
                        alt="Une photo de la coach fitness de l'association"></div>
                <div class="personal-info unbounded">
                    <p>Educatrice sportive, titulaire du BPJEPS Activités gymniques de la forme et de la force (mention
                        haltère musculation et cours collectifs), initiateur haltérophilie depuis 2015.Je suis également
                        titulaire du Zumba Basic-1 (2014) et Pound Fitness (2017), certifiée professeure de Yoga Vinyasa
                        (2023)</p>
                    <h3>Elodie<a target="_blank" href="https://www.facebook.com/elodie.fit.50"> <img
                                src="/public/img/facebook-black-icon.png" alt="facebook black icon"></a></h3>
                </div>
            </article>
        </section>
    </main>



    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="./script.js"></script>
    <script src="/Public/js/burger.js"></script>
</body>

</html>