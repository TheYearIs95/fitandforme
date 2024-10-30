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
        <h2><?= $page_title ?></h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="" method="POST">
                <label for="firstname">Prénom:</label> <br>
                <input type="text" name="firstname" value="<?php if ($page_title === "Modifier utilisateur") {
                                                                echo $user->firstname;
                                                            } ?>" required> <br>
                <label for="lastname">Nom:</label> <br>
                <input type="text" name="lastname" value="<?php if ($page_title === "Modifier utilisateur") {
                                                                echo $user->lastname;
                                                            } ?>" required>
                <label for="email">Email:</label> <br>
                <input type="text" name="email" value="<?php if ($page_title === "Modifier utilisateur") {
                                                            echo $user->email;
                                                        } ?>" required> <br>
                <label for="role">Rôle:</label> <br>
                <select name="role" id="">
                    <option value="1">Utilisateur</option>
                    <option value="2">Administrateur</option>
                </select> <br>
                <!-- Champ mot de passe qui s'affiche QUE si on est en train d'ajouter un utilisateur (if) -->
                <label for="password">Mot de passe:</label> <br>
                <input type="password" name="password" required> <br>
                <input class="modify-button" type="submit" name="" id="" value="<?= $button_value ?>">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>