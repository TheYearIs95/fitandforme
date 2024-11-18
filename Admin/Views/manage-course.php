<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/styles.css">
<link rel="stylesheet" href="/Admin/Public/css/manage-user.css">
<title>Gestion cours</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="create-user-main">
        <h2 class="create-user-title">Liste des cours:</h2>
        <table class="course-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $index => $course) { ?>
                    <tr>
                        <td><?php echo $course->id; ?></td>
                        <td><?php echo $course->title; ?></td>
                        <td class="select">
                            <a href="/course/update/<?php echo $course->id; ?>" class="button">Modifier</a>
                            <a href="/course/delete/<?php echo $course->id; ?>" class="delete-button">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="/course/create" class="add-user-button">Ajouter cours</a>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>