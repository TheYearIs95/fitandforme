<?php 
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos évènements</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="evenements.css">
    <link rel="icon" type="image/x-icon" href="img/icon/favicon-32x32.png">

</head>

<body>
    <header class="header">
        <a href="index.html" class="logo a-nav unbounded">Fit and Forme</a>
        <div class="burger-icon">
            <label class="burger" for="burger">
                <input class="line" type="checkbox" id="burger" />
            </label>
        </div>

        <nav class="nav">
            <a class="a-nav" href="cours.html">Cours</a>
            <a class="a-nav" href="planning.html">Planning</a>
            <a class="a-nav" href="a-propos.html">À propos</a>
            <a class="a-nav" href="contact.html">Contact</a>
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
                <img src="img/image-evenements.jpg" class="event-image" alt="Une photo lors du cours 'Fit-Dance'">
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

    <footer class="footer">
        <div class="footer-logo footer-section logo footer-left">
            <a href="index.html" class="unbounded">Fit and Forme</a>
            <button class="news-button courses-button contact-button">Contactez-nous</button>
        </div>

        <div>
            <div class="footer-section links footer-center">
                <div class="footer-section social-media">
                    <a target="_blank" href="https://www.facebook.com/fitandforme45/" class="social-networking"><img
                            src="img/facebook.png" alt="Facebook"></a>
                    <a target="_blank" href="https://www.instagram.com/fit_andforme/" class="social-networking"><img
                            src="img/instagram.png" alt="Instagram"></a>
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
                    <img src="img/appel.png" alt="Phone icon"> 06 99 87 46 71 <br>
                    <img src="img/appel.png" alt="Phone icon"> 06 30 23 20 22
                </p>
            </div>
        </div>

        <div class="footer-bottom footer-section">
            <img class="logo-footer-bottom" src="img/silhouette-footer-gris.png"
                alt="Logo silhouette d'une femme qui dance">
            <p class="unbounded copyright"> &copy; Fit and Forme 2024</p>
            <p class="unbounded legal-statement">Assiocation à but non-lucratif</p>
            <p class="unbounded legal-statement">Tous droits réservés</p>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>

</html>