<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/manage-user.css">
<link rel="stylesheet" href="/Admin/Public/css/manage-course.css">

<title>Gestion tarifs</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="create-user-main">
        <h2 class="create-user-title">Liste des abonnements:</h2>
        <h3>(Page tarifs)</h3>
        <table class="course-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Formule</th>
                    <th>Session</th>
                    <th>Tarif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prices as $key => $price) { ?>
                    <tr>
                        <td><?php echo $price->id ?></td>
                        <td><?php echo $price->type ?></td>
                        <td><?php echo $price->session ?></td>
                        <td><?php echo $price->price ?></td>
                        <td class="select">
                            <a href="/pricing/update/<?php echo $price->id ?>" class="button">Modifier</a>
                            <a href="/pricing/delete/<?php echo $price->id ?>" class="delete-button">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/pricing/create" class="add-user-button">Ajouter session</a>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>