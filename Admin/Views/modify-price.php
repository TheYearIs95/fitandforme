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
        <h2><?php echo $page_title ?></h2>
        <form action="" method="POST">
            <div class="modify-user-form">
                <div>
                    <p>Choisissez une formule:</p>
                    <input type="radio" name="formula" value="Sans Zumba" <?php if ($page_title === "Modifier session" && $price->type == "Sans Zumba") {
                                                                                echo "checked";
                                                                            } ?>>
                    <label for="formula">Sans Zumba</label>
                    <input type="radio" name="formula" value="Avec Zumba" <?php if ($page_title === "Modifier session" && $price->type == "Avec Zumba") {
                                                                                echo "checked";
                                                                            } ?>>
                    <label for="formula">Avec Zumba</label>
                    <input type="radio" name="formula" value="Cours Junior" <?php if ($page_title === "Modifier session" && $price->type == "Cours Junior") {
                                                                                echo "checked";
                                                                            } ?>>
                    <label for="formula">Cours Junior</label>
                </div>
                <label for="session">Session:</label>
                <input type="text" name="session" value="<?php if ($page_title === "Modifier session") {
                                                                echo $price->session;
                                                            } ?>">
                <label for="price">Tarif (€):</label>
                <input type="number" name="price" value="<?php if ($page_title === "Modifier session") {
                                                                echo $price->price;
                                                            } ?>">
            </div>
            <input class="modify-button" type="submit" name="" id="" value="<?php echo $button_value ?>">
        </form>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>