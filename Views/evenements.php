<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/head.php");
?>
<link rel="stylesheet" href="/Public/css/evenements.css">
<title>Nos évènements</title>
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
        <h1>“Corps actif, <br> esprit positif”</h1>
    </div>

    <main>
        <section class="width-section events-text">
            <h2 class="events-subtitle unbounded">Nos évènements tout au long de l'année</h2>
            Chez Fit and Forme, nous croyons que le sport et le bien-être vont au-delà des cours réguliers. <br>
            <br>
            C'est pourquoi nous organisons, tout au long de l'année, divers événements pour vous permettre de rester
            motivés, de découvrir de nouvelles activités, et de partager des moments conviviaux avec notre
            communauté. <br>
            <br>
            Que vous soyez passionnés de fitness, de danse ou de yoga, vous trouverez des événements adaptés à tous
            les niveaux et envies, tels que :
            </p>
            <ul class="events-list">
                <li>
                    <span class="events-names">Matinée découverte :</span> Le but de cette matinée découverte est
                    d'explorer de nouvelles disciplines. Après
                    avoir déjà expérimenté des activités comme le self-défense, la pole dance et la marche nordique,
                    nous vous proposons une expérience totalement différente.
                </li>
                <li>
                    <span class="events-names">Évènements bien-être :</span> Nous organisons des ateliers spécialement
                    dédiés à l’initiation au yoga, dans
                    le cadre de notre soutien à Octobre Rose. Ces séances visent à promouvoir le bien-être physique et
                    mental tout en sensibilisant à la lutte contre le cancer du sein, une cause qui nous tient
                    particulièrement à cœur.
                </li>
                <li>
                    <span class="events-names">Soirées à thème et fêtes sportives :</span> Un mélange de fun et
                    d’effort, parfait pour se dépenser tout
                    en s’amusant.
                </li>
                <li>
                    <span class="events-names">Journées portes ouvertes :</span> Venez découvrir gratuitement nos
                    activités, rencontrer les coachs et
                    échanger avec d'autres passionnés.
                </li>
            </ul>

            <p>Ces événements sont l'occasion idéale de vous dépasser, de rencontrer des personnes partageant les mêmes
                intérêts et de vous amuser, tout en prenant soin de votre forme physique et mentale.

                Rejoignez-nous et vivez l'expérience Fit and Forme au-delà des entraînements réguliers !</p>
        </section>

        <section class="article-section width-section">
            <!-- Le dernier évènement ici doit s'afficher dans la rubrique "Actualités" de la page d'accueil -->
            <div class="event-article">
                <img src="/public/img/image-evenements.jpg" class="event-image" alt="Une photo lors du cours 'Fit-Dance'">
                <p>
                    <span class="events-names">Retour sur la reprise des cours - Semaine du 16 septembre:</span>

                    Lundi 16 septembre a marqué la reprise officielle des cours chez Fit and Forme, avec une belle
                    diversité d’activités pour tous les niveaux. La journée a commencé avec un cours de gym posturale de
                    17h30 à 18h30, suivi d’une session de renforcement musculaire de 18h30 à 19h30. Enfin, la soirée
                    s’est terminée en beauté avec un cours de step dynamique, de 19h45 à 20h30, qui s'est déroulé à la
                    salle de Saint Aignan des Gués.

                    Mercredi, l’ambiance s'est prolongée avec une session de "Fit-Dance", où les participants ont pu
                    s'exprimer en rythme dans une ambiance fun et entraînante (voir photo).

                    Merci à tous ceux qui ont rejoint cette semaine de rentrée pleine d'énergie ! Nous avons hâte de
                    continuer sur cette belle lancée et de vous retrouver pour les prochaines séances.
                </p>
            </div>
        </section>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="./script.js"></script>
    <script src="/Public/js/burger.js"></script>
</body>

</html>