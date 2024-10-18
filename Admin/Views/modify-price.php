<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title>Modification tarifs</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-container modify-user-main ">
        <h2>Modifier une formule:</h2>
        <div class="modify-user-form">
            <label for="">Nom</label>
            <input type="text">
            <label for="">Tarif</label>
            <input type="number">
        </div>
        <input class="modify-button" type="submit" name="" id="" value="Modifier">
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>