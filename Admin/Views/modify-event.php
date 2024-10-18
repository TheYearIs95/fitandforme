<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title>Modification évènement</title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2>Modifier évènement:</h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="">
                <label for="">Titre:</label> <br>
                <input type="text"> <br>
                <label for="">Image:</label> <br>
                <input type="file" name="" id="">
                <label for="">Description:</label> <br>
                <textarea name="" id=""></textarea> <br>
                <input class="modify-button" type="submit" name="" id="" value="Modifier">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>