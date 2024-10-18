<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>
<title>Modification cours</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2>Modifier cours:</h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="">
                <label for="">Nom:</label> <br>
                <input type="text"> <br>
                <label for="">Image:</label> <br>
                <input type="file"> <br>
                <label for="">Heure début:</label> <br>
                <input type="time"> <br>
                <label for="">Heure fin:</label> <br>
                <input type="time"> <br>
                <label for="">Jour:</label> <br>
                <select id="" name="">
                    <option value="monday">Lundi</option>
                    <option value="tuesday">Mardi</option>
                    <option value="wednesday">Mercredi</option>
                    <option value="thursday">Jeudi</option>
                    <option value="friday">Vendredi</option>
                    <option value="saturday">Samedi</option>
                    <option value="sunday">Dimanche</option>
                </select>
                <input class="modify-button" type="submit" name="" id="" value="Modifier">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>