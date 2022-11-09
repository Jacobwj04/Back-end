<?php

    require_once '../path.php';
    include '../db/connect.php';

    var_dump($_POST["subject"]);
    echo "<br>";
    var_dump($_POST["date"]);
    echo "<br>";
    var_dump($_POST["paragraph"]);

    
?>