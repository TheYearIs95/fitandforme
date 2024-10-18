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
                    <th>Date de création</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Octobre rose</td>
                    <td>12-05-2019</td>
                    <td class="select"><a href="modify-event.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Super Zumba</td>
                    <td>12-05-2019</td>
                    <td class="select"><a href="modify-event.php" class="button">Modifier</a></td>
                </tr>
            </tbody>
        </table>
        <a href="" class="add-user-button">Ajouter évènement</a>
    </main>






</body>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
?>

</html>