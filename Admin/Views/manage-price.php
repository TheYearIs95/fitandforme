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
                    <th>Abonnement</th>
                    <th>Tarif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1 séance</td>
                    <td>111</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2 séances</td>
                    <td>162</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>3 séances</td>
                    <td>204</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>4 séances</td>
                    <td>222</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>5 séances</td>
                    <td>240</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Zumba seule</td>
                    <td>144</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Zumba + 1 séance</td>
                    <td>198</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Zumba + 2 séances</td>
                    <td>243</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Zumba + 3 séances</td>
                    <td>258</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Illimité</td>
                    <td>276</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Danses urbaines (cours junior)</td>
                    <td>99</td>
                    <td class="select"><a href="modify-price.php" class="button">Modifier</a></td>
                </tr>
            </tbody>
        </table>
        <a href="add-formula.php" class="add-user-button">Ajouter formule</a>
    </main>
    </div>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>