<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<link rel="stylesheet" href="/Admin/Public/css/manage-course.css">
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
                    <th>Date de création</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Gym posturale</td>
                    <td>561651</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Renforcement musculaire</td>
                    <td>687894</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Step</td>
                    <td>79615</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pound</td>
                    <td>5161</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Zumba</td>
                    <td>1656</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Renfo-stretching</td>
                    <td>1686</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Danses urbaines</td>
                    <td>61844</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Dance fit</td>
                    <td>59849</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Cardio boxe</td>
                    <td>9184</td>
                    <td class="select"><a href="modify-course.php" class="button">Modifier</a></td>
                </tr>
            </tbody>
        </table>
        <a href="#" class="add-user-button">Ajouter cours</a>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>