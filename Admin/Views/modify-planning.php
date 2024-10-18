<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title>Modification planning</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2>Modifier planning:</h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="">
                <h3>Nom du cours</h3>
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
                <input class="modify-button" type="submit" name="" id="" value="Ajouter séance">
                <p style="border: 2px solid red;">If Add New Session</p>
                <select id="" name="">
                    <option value="#">Sélectionnez votre cours</option>
                    <label for="">Heure début:</label> <br>
                    <input type="time"> <br>
                    <label for="">Heure fin:</label> <br>
                    <input type="time"> <br>
                </select>
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>