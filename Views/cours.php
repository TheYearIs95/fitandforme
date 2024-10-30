<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos cours</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/cours.css">
    <link rel="icon" type="image/x-icon" href="/public/img/icon/favicon-32x32.png">

</head>

<body>
    <header class="header">
        <a href="/" class="logo a-nav unbounded">Fit and Forme</a>
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
                    <img src="/public/img/cours-gym-posturale.jpg" class="gym-posturale-image courses-images"
                        alt="Une photo d'une femme qui s'étire">
                </div>
                <h3 class="courses-names">Gym posturale</h3>
            </article>

            <article class="renforcement-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-renforcement.jpg" class="renforcement-image courses-images"
                        alt="Une photo d'une femme avec une haltère">
                </div>
                <h3 class="courses-names">Renforcement musculaire</h3>
            </article>

            <article class="step-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-step.jpg" class="step-image courses-images"
                        alt="Une photo d'une femme qui fait du step">
                </div>
                <h3 class="courses-names">Step</h3>
            </article>

            <article class="pound-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-pound.jpg" class="pound-image courses-images"
                        alt="Une photo d'une femme avec deux sticks vert">
                </div>
                <h3 class="courses-names">Pound</h3>
            </article>

            <article class="zumba-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-zumba.jpg" class="zumba-image courses-images"
                        alt="Une photo d'une femme qui danse la Zumba">
                </div>
                <h3 class="courses-names">Zumba</h3>
            </article>

            <article class="stretching-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-stretching.jpg" class="stretching-image courses-images"
                        alt="Une photo d'une femme qui stretch">
                </div>
                <h3 class="courses-names">Renfo-stretching</h3>
            </article>

            <article class="danses-urbaines-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-danses-urbaines.jpg" class="danses-urbaines-image courses-images"
                        alt="Une photo d'une fille qui danse">
                </div>
                <h3 class="courses-names">Danses urbaines</h3>
            </article>

            <article class="dance-fit-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-dance-fit.jpg" class="dance-fit-image courses-images"
                        alt="Une photo d'une femme qui danse">
                </div>
                <h3 class="courses-names">Dance fit</h3>
            </article>

            <article class="boxe-div container-div">
                <div class="images-container">
                    <img src="/public/img/cours-boxe.jpg" class="boxe-image courses-images" alt="Une photo d'une bande de boxe">
                </div>
                <h3 class="courses-names">Cardio boxe</h3>
            </article>
        </div>
    </section>



    <footer class="footer">
        <div class="footer-logo footer-section logo footer-left">
            <a href="index.html" class="unbounded">Fit and Forme</a>
            <button class="news-button courses-button contact-button">Contactez-nous</button>
        </div>

        <div>
            <div class="footer-section links footer-center">
                <div class="footer-section social-media">
                    <a target="_blank" href="https://www.facebook.com/fitandforme45/" class="social-networking"><img
                            src="/public/img/facebook.png" alt="Facebook"></a>
                    <a target="_blank" href="https://www.instagram.com/fit_andforme/" class="social-networking"><img
                            src="/public/img/instagram.png" alt="Instagram"></a>
                </div>
                <ul>
                    <li><a class="a-nav" href="cours.html">Cours</a></li>
                    <li><a class="a-nav" href="evenements.html">Evenements</a></li>
                    <li><a class="a-nav" href="planning.html">Planning</a></li>
                    <li><a class="a-nav" href="a-propos.html">À propos</a></li>
                    <li><a class="a-nav" href="mentions.html">Mentions légales</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-right footer-section">
            <div class="address">
                <iframe title="Salle polyvalente Bray-Saint-Aignan"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1103.1293282732431!2d2.369283498097771!3d47.82813798203314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e56cb2aa1985cf%3A0x7560a58c1e665991!2s4%20Lot.%20les%20Saules%2C%2045460%20Bray-Saint-Aignan!5e1!3m2!1sfr!2sfr!4v1726609835302!5m2!1sfr!2sfr"
                    width="320" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="location">4 Lot. les Saules, <br> 45460 Bray-Saint-Aignan <br>
                    <img src="/public/img/appel.png" alt="Phone icon"> 06 99 87 46 71 <br>
                    <img src="/public/img/appel.png" alt="Phone icon"> 06 30 23 20 22
                </p>
            </div>
        </div>

        <div class="footer-bottom footer-section">
            <img class="logo-footer-bottom" src="/public/img/silhouette-footer-gris.png"
                alt="Logo silhouette d'une femme qui dance">
            <p class="unbounded copyright"> &copy; Fit and Forme 2024</p>
            <p class="unbounded legal-statement">Assiocation à but non-lucratif</p>
            <p class="unbounded legal-statement">Tous droits réservés</p>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>

</html>