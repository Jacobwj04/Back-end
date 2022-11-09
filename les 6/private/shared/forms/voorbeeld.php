<?php
require_once '../../path.php';
include DATABASE_PATH . '/' . 'connect.php';

if(!isset($_POST['user'], $_POST['email'])) {
    die;
}{
    if (empty(trim($_POST['user']))) {
        echo ' Ongeldig gebruikersnaam';
    }

    if (empty(trim($_POST['email']))) {
        echo ' Ongeldig Email';
    }

    if (!filter_var($_POST['email'], filter:FILTER_VALIDATE_EMAIL)) {
        echo 'Ongeldige email  formaat';
    }
}

$str = "INSERT INTO MOCK_DATA (naam, email)VALUES ('{$_POST['user']}', '{$_POST['email']}')";

$result = $db->query($str);

$result = $db->query("SELECT naam, email FROM MOCK_DATA ORDER BY id DESC");

while($row = $result->fetchArray()) {
    print(
        $row['naam']. '<br>' . 
        $row['email'] . '<br><br>'
    );
};