<?php

    require_once '../path.php';
    include '../db/connect.php';


    
    var_dump($_POST["editor"]);
    $db->exec("INSERT INTO input (tekst) VALUES('".$_POST["editor"]."')"); 
    
?>