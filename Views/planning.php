<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning & tarifs</title>
    <link rel="stylesheet" href="/Public/css/styles.css">
    <link rel="stylesheet" href="/Public/css/planning.css">
    <link rel="icon" type="image/x-icon" href="/public/img/icon/favicon-32x32.png">

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
        <div class="hero-section-background"></div>

        <section class="planning-section width-section">
            <h1 class="unbounded planning-subtitle">Planning des cours pour la saison 2024-2025</h1>
            <h2 class="unbounded important-information">Cours dispensés du 16 Septembre au 9 Juillet</h2>

            <article class="pre-planning">
                <div class="notice-section">
                    <p class="guidelines">Cours assurés par des éducateurs brevetés</p>
                    <p class="guidelines">Cours adultes et adolescents à partir de 15 ans</p>
                    <p class="guidelines">Cours junior à partir de 7 ans</p>
                    <p class="guidelines">*Le cours de step se passe à la Salle Polyvalente de Saint Aignan des Gués</p>
                    <p class="guidelines black-guideline">COURS D’ESSAI OFFERT !</p>
                </div>
            </article>

            <!-- Planning -->
            <article class="planning">

                <!-- Lundi -->
                <div class="days">
                    <h3 class="days-name days-item">Lundi</h3>

                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                </div>

                <!-- Mardi -->
                <div class="days">
                    <h3 class="days-name days-item">Mardi</h3>

                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                </div>

                <!-- Mercredi -->
                <div class="days">
                    <h3 class="days-name days-item">Mercredi</h3>

                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item days-item--news">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                    <div class="days-hours days-item days-item--news">
                        <span class="hours">17h30 - 18h30</span>
                        <span class="activity">Gym posturale</span>
                    </div>
                </div>
            </article>
        </section>

        <section class="pricing-section width-section">
            <h2 class="unbounded planning-subtitle">Cotisation annuelle</h2>
            <h3 class="unbounded important-information">Licence et assurance incluses*</h3>

            <div class="pricing-grid-container">
                <div class="pricing-div">
                    <p class="pricing-div-title">Formule SANS Zumba</p>
                    <div class="left-side">
                        <span class="number-of-courses">1 Séance</span>
                        <span class="number-of-courses">2 Séances</span>
                        <span class="number-of-courses">3 Séances</span>
                        <span class="number-of-courses">4 Séances</span>
                        <span class="number-of-courses">5 Séances</span>
                    </div>
                    <div class="right-side">
                        <span class="prices-of-courses">111€</span>
                        <span class="prices-of-courses">162€</span>
                        <span class="prices-of-courses">204€</span>
                        <span class="prices-of-courses">222€</span>
                        <span class="prices-of-courses">240€</span>
                    </div>
                </div>

                <div class="pricing-div">
                    <p class="pricing-div-title">Formule AVEC Zumba</p>
                    <div class="left-side">
                        <span class="number-of-courses">Zumba seule</span>
                        <span class="number-of-courses">Zumba + 1 Séance</span>
                        <span class="number-of-courses">Zumba + 2 Séances</span>
                        <span class="number-of-courses">Zumba + 3 Séances</span>
                        <span class="number-of-courses">Illimité</span>
                    </div>
                    <div class="right-side">
                        <span class="prices-of-courses">144€</span>
                        <span class="prices-of-courses">198€</span>
                        <span class="prices-of-courses">243€</span>
                        <span class="prices-of-courses">258€</span>
                        <span class="prices-of-courses">276€</span>
                    </div>
                </div>

                <div class="pricing-div">
                    <p class="pricing-div-title">Cours Junior</p>
                    <div class="left-side">
                        <span class="number-of-courses">Danses urbaines</span>
                    </div>
                    <div class="right-side">
                        <span class="prices-of-courses">99€</span>
                    </div>
                </div>

                <div class="orange-pricing-div">
                    <p>Possibilité de régler en 3 fois<br>(Par chèque)</p>
                </div>

            </div>
        </section>
    </main>


    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="./script.js"></script>
</body>

</html>