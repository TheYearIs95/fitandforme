<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title>Modification tarifs</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2>Ajouter une formule:</h2>
        <div class="radio-form-container content">
            <form action="" class="radio-form">
                <h3>Choisir le type</h3> <br>
                <input name="formula" type="radio">
                <label for="">Formule SANS Zumba</label> <br>
                <input name="formula" type="radio">
                <label for="">Formule AVEC Zumba</label> <br>
                <input name="formula" type="radio">
                <label for="">Cours junior</label> <br>
            </form>
            <form action="" class="modify-price-form">
                <h3><label for="">Nombre de séances/ Type d'abonnement:</label></h3>
                <input type="text">
                <h3><label for="">Tarif:</label></h3>
                <input type="number">
            </form>

            <input class="modify-button" type="submit" name="" id="" value="Ajouter">
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>