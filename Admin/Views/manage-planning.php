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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gym posturale</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Renforcement musculaire</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Step</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pound</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Zumba</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Renfo-stretching</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Danses urbaines</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dance fit</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Cardio boxe</td>
                    <td class="select"><a href="modify-planning.php" class="button">Modifier</a></td>
                </tr>
            </tbody>
        </table>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>