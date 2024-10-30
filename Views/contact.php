<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/Public/css/styles.css">
    <link rel="stylesheet" href="/Public/css/contact.css">
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

    <section class="hero-section hero-section-contact">
        <p class="width-section">Chez Fit and Forme, nous sommes toujours heureux de répondre à vos questions ou de
            discuter de vos objectifs bien-être. N’hésitez pas à nous contacter !</p>
        <div class="gradient-form width-section">
            <form action="" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" placeholder="Votre nom" name="lastname">
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" placeholder="Votre prénom" name="firstname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Votre e-mail" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Votre message" id=""></textarea>
                </div>
                <button type="submit" class="contact-form-button">
                    Envoyer
                </button>
            </form>
        </div>
    </section>


    <footer class="footer">
        <div class="footer-logo footer-section logo footer-left">
            <p class="unbounded">Fit and Forme</p>

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