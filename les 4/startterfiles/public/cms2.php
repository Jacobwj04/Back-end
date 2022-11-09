<?php

    require_once '../private/path.php';
    include '../private/db/connect.php';

    $db->exec("DELETE FROM input");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cms.css">
    <title>CMS2</title>
</head>

<body class="body">
    <section class="cms">
        <form class="cms__form" method="POST" action="../private/shared/data.php">
            <figure class="form__img"></figure>
            <div class="form__wrapper">
                <input type="text" class="form__inputs" name="subject" id="subject" placeholder="Subject" require>
                <input type="date" class="form__inputs" name="date" id="date" placeholder="Date" require>
                <textarea class="form__textarea" name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Text" require></textarea>
                <input class="form__submitBtn" type="submit" value="submit" name="submitBtn">
            </div>
        </form>
    </section>
</body>

</html>