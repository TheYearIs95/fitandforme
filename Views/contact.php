<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/head.php");
?>
<link rel="stylesheet" href="/Public/css/contact.css">
<title>Contact</title>
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


    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Public/_blocks/footer.php");
    ?>

    <script src="./script.js"></script>
    <script src="/Public/js/burger.js"></script>
</body>

</html>