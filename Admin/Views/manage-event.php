<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/manage-user.css">
<link rel="stylesheet" href="/Admin/Public/css/manage-event.css">
<title>Gestion des évènements</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>
    <main class="create-event-main">
        <h2 class="create-event-title">Liste des évènements:</h2>
        <table class="events-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $key => $event) { ?>
                    <tr>
                        <td><?php echo $event->id; ?></td>
                        <td><?php echo $event->title; ?></td>
                        <td class="select">
                        <a href="/event/update/<?php echo $event->id; ?>" class="button">Modifier</a>
                        <a href="/event/delete/<?php echo $event->id; ?>" class="delete-button">Supprimer</a>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/event/create" class="add-user-button">Ajouter évènement</a>
    </main>

</body>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
?>

</html>