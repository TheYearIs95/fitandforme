<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title>Modification utilisateur</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2>Modifier utilisateur:</h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="">
                <label for="firstname">Prénom:</label> <br>
                <input type="text" name="firstname"> <br>
                <label for="lastname">Nom:</label> <br>
                <input type="text" name="lastname"> <br>
                <label for="email">Email:</label> <br>
                <input type="text" name="email"> <br>
                <label for="role">Rôle:</label> <br>
                <select name="role" id="">
                    <option value="">Utilisateur</option>
                    <option value="">Admin</option>
                </select> <br>
                <!-- Champ mot de passe qui s'affiche QUE si on est en train d'ajouter un utilisateur (if) -->
                <label for="password">Mot de passe:</label> <br>
                <input type="password" name="password"> <br>
                <input class="modify-button" type="submit" name="" id="" value="Modifier">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/_blocks/footer.php");
    ?>
</body>

</html>