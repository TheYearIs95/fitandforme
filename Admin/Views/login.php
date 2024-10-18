<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<title>Admin</title>
</head>

<body>
    <header class="header">
        <h1>Fit and Forme</h1>
    </header>
    <main class="index-main">
        <div class="content">
            <form action="" method="POST" class="login-form">
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" placeholder="Votre e-mail" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

                <button type="submit">Se connecter</button>
                <a href="">Mot de passe oublié?</a>
            </form>
        </div>
    </main>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>