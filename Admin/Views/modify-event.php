<?php
include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/doctype.php");
?>

<title><?= $page_title; ?></title>
</head>

<body>
    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/header.php");
    ?>

    <main class="modify-user-main">
        <h2><?= $page_title; ?></h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="" method="POST" enctype="multipart/form-data">
                <label for="event-title">Titre:</label> <br>
                <input type="text" name="event-title" value="<?php
                                                                if ($page_title === "Modifier évènement") {
                                                                    echo $event->title;
                                                                }
                                                                ?>"> <br>
                <label for="event-image">Image:</label> <br>
                <input type="file" name="event-image" id="" value="<?php
                                                                if ($page_title === "Modifier évènement") {
                                                                    echo $event->image;
                                                                }
                                                                ?>">
                <label for="event-description">Description:</label> <br>
                <textarea name="event-description" id=""><?= $description ?? ""; ?></textarea> <br>
                <input class="modify-button" type="submit" name="" id="" value="<?= $button_value ?>">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>