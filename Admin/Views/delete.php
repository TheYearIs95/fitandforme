<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

</head>

<body>
    <div class="modify-user-container content">
        <form action="" method="POST">
            <h2><?= $delete ?></h2>
            <input type="submit" name="confirm" value="Oui">
            <a href="<?= $route ?>">Non</a>
            <!-- $route est la variable du chemin de redirection (index) -->
        </form>
    </div>
</body>

</html>

<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
?>