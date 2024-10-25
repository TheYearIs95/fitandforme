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
            <form class="modify-user-form" action="" method="POST">
                <label for="course-name">Nom:</label> <br>
                <input type="text" name="course-name" value="<?php
                                                                if ($page_title === "Modifier cours") {
                                                                    echo $course->title;
                                                                }
                                                                ?>"> <br>
                <label for="course-image">Image:</label> <br>
                <input type="file" name="course-image" value="<?php
                                                                if ($page_title === "Modifier cours") {
                                                                    echo $course->image;
                                                                }
                                                                ?>"> <br>
                <?php if ($page_title === "Ajouter cours") { ?>
                    <label for="starting-time">Heure début:</label> <br>
                    <input type="time" name="starting-time" value=""> <br>
                    <label for="ending-time">Heure fin:</label> <br>
                    <input type="time" name="ending-time" value=""> <br>
                    <label for="day">Jour:</label> <br>
                    <select id="" name="day">
                        <option value="1">Lundi</option>
                        <option value="2">Mardi</option>
                        <option value="3">Mercredi</option>
                        <option value="4">Jeudi</option>
                        <option value="5">Vendredi</option>
                        <option value="6">Samedi</option>
                        <option value="7">Dimanche</option>
                    </select>
                <?php } ?>
                <label for="course-description">Description:</label>
                <textarea name="course-description" id=""><?= $description ?? ""; ?></textarea>
                <input class="modify-button" type="submit" name="" id="" value="<?= $button_value; ?>">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>