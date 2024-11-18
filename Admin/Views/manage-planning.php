<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/manage-user.css">
<link rel="stylesheet" href="/Admin/Public/css/manage-course.css">
<title>Gestion planning</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="create-user-main">
        <h2 class="create-user-title">Liste des cours:</h2>
        <h3>(Page planning)</h3>
        <table class="course-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Horaires</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($times as $index => $time) { ?>
                <tr>
                    <td><?php echo $time->id ?></td>
                    <td><?php echo $time->title ?></td>
                    <td><?php echo substr($time->starting_time, 0, 5) . " - " . substr($time->ending_time, 0, 5); ?></td>
                    <td class="select">
                        <a href="/time/update/<?php echo $time->id; ?>" class="button">Modifier</a>
                        <a href="/time/delete/<?php echo $time->id; ?>" class="delete-button">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/time/create" class="add-user-button">Ajouter séance</a>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>