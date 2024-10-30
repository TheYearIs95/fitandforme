<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="/Public/css/styles.css">
    <link rel="stylesheet" href="/Public/css/a-propos.css">
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



    <footer class="footer">
        <div class="footer-logo footer-section logo footer-left">
            <a href="index.html" class="unbounded">Fit and Forme</a>
            <button class="news-button courses-button contact-button">Contactez-nous</button>
        </div>

        <div>
            <div class="footer-section links footer-center">
                <div class="footer-section social-media">
                    <a target="_blank" href="https://www.facebook.com/fitandforme45/" class="social-networking"><img
                            src="/public/img/facebook.png" alt="Facebook white icon"></a>
                    <a target="_blank" href="https://www.instagram.com/fit_andforme/" class="social-networking"><img
                            src="/public/img/instagram.png" alt="Instagram white icon"></a>
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