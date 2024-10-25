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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user) { ?>
                    <tr>
                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->firstname ?></td>
                        <td><?php echo $user->lastname ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->role_name ?></td>
                        <td class="select">
                            <a href="/user/update/<?php echo $user->id; ?>" class="button">Modifier</a>
                            <a href="/user/delete/<?php echo $user->id; ?>" class="button">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/user/create" class="add-user-button">Ajouter utilisateur</a>
    </main>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>