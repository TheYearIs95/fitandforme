<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/manage-user.css">
<title>Gestion des utilisateurs</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="create-user-main">
        <h2 class="create-user-title">Liste des utilisateurs:</h2>
        <table class="users-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse e-mail</th>
                    <th>Rôle</th>
                    <th>Date de création</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hamilton</td>
                    <td>Lewis</td>
                    <td>e-mail@test-email.com</td>
                    <td>Administrateur</td>
                    <td>12-05-2019</td>
                    <td class="select"><a href="modify-user.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Norris</td>
                    <td>Lando</td>
                    <td>e-mail@test-email.com</td>
                    <td>Modérateur</td>
                    <td>17-07-2021</td>
                    <td class="select"><a href="#" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Verstappen</td>
                    <td>Max</td>
                    <td>e-mail@test-email.com</td>
                    <td>Utilisateur</td>
                    <td>13-06-2018</td>
                    <td class="select"><a href="#" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Russel</td>
                    <td>Georges</td>
                    <td>e-mail@test-email.com</td>
                    <td>Utilisateur</td>
                    <td>02-11-2023</td>
                    <td class="select"><a href="#" class="button">Modifier</a></td>
                </tr>
            </tbody>
        </table>
        <a href="#" class="add-user-button">Ajouter utilisateur</a>
    </main>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>