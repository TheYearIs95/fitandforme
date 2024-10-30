<?php
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit and Forme</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/public//public/img/icon/favicon-32x32.png">

</head>

<body>
    <header class="header">
        <a href="/Views/home.php" class="logo a-nav unbounded">Fit and Forme</a>
        <nav class="nav">
            <a class="a-nav" href="">Evenements</a>
            <a class="a-nav" href="">Planning</a>
            <a class="a-nav" href="">À propos</a>
            <a class="a-nav" href="">Contact</a>
        </nav>
    </header>
    <main>
        <div class="hero-section-planning">

        </div>
    </main>
    <footer class="footer">
        <div class="footer-logo footer-section logo footer-left">
            <p class="unbounded">Fit and Forme</p>
            <button class="news-button courses-button contact-button">Contactez-nous</button>
        </div>

        <div>
            <div class="footer-section links footer-center">
                <div class="footer-section social-media">
                    <a href="https://www.facebook.com/fitandforme45/" class="social-networking"><img src="/public/img/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/fit_andforme/" class="social-networking"><img src="/public/img/instagram.png" alt="Instagram"></a>
                </div>
                <ul>
                    <li><a href="cours.html">Cours</a></li>
                    <li><a href="evenements.html">Evenements</a></li>
                    <li><a href="planning.html">Planning</a></li>
                    <li><a href="a-propos.html">À propos</a></li>
                    <li><a href="mentions.html">Mentions légales</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-right footer-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1103.1293282732431!2d2.369283498097771!3d47.82813798203314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e56cb2aa1985cf%3A0x7560a58c1e665991!2s4%20Lot.%20les%20Saules%2C%2045460%20Bray-Saint-Aignan!5e1!3m2!1sfr!2sfr!4v1726609835302!5m2!1sfr!2sfr"
                width="320" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="location">4 Lot. les Saules, <br> 45460 Bray-Saint-Aignan <br>
                <img src="/public/img/appel.png" alt="Phone icon"> 06 9 9 87 46 71 <br>
                <img src="/public/img/appel.png" alt="Phone icon"> 06 30 23 20 22
            </p>
        </div>
    </footer>

    <script src="./script.js"></script>
</body>

</html>