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
        <h2><?= $page_title; ?></h2>
        <div class="modify-user-container content">
            <form class="modify-user-form" action="">
                <label for="course">Séance(s):</label> <br>
                <select id="" name="course">
                    <?php foreach ($courses as $key => $course) { ?>
                        <option value="<?php echo $course->id ?>"><?php
                                                                echo $course->title;
                                                                ?>
                        </option>
                    <?php } ?>
                </select>
                <label for="day">Jour:</label> <br>
                <select id="" name="day">
                    <option value="1" <?php if($page_title === "Modifier séance") { echo $time->day == 1 ? "selected" : ""; } ?>>Lundi</option>
                    <option value="2" <?php if($page_title === "Modifier séance") { echo $time->day == 2 ? "selected" : ""; } ?>>Mardi</option>
                    <option value="3" <?php if($page_title === "Modifier séance") { echo $time->day == 3 ? "selected" : ""; } ?>>Mercredi</option>
                    <option value="4" <?php if($page_title === "Modifier séance") { echo $time->day == 4 ? "selected" : ""; } ?>>Jeudi</option>
                    <option value="5" <?php if($page_title === "Modifier séance") { echo $time->day == 5 ? "selected" : ""; } ?>>Vendredi</option>
                    <option value="6" <?php if($page_title === "Modifier séance") { echo $time->day == 6 ? "selected" : ""; } ?>>Samedi</option>
                    <option value="7" <?php if($page_title === "Modifier séance") { echo $time->day == 7 ? "selected" : ""; } ?>>Dimanche</option>
                </select>
                <label for="starting-time">Heure début:</label> <br>
                <input type="time" name="starting-time" value="<?php if($page_title === "Modifier séance") {echo $time->starting_time;} ?>"> <br>
                <label for="ending-time">Heure fin:</label> <br>
                <input type="time" name="ending-time" value="<?php if($page_title === "Modifier séance") {echo $time->ending_time;} ?>"> <br>
                <input class="modify-button" type="submit" name="" id="" value="<?= $button_value; ?>">
            </form>
        </div>
    </main>

    <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/Admin/Views/_blocks/footer.php");
    ?>
</body>

</html>