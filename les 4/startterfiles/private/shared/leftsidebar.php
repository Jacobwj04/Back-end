<?php
    include DATABASE_PATH . '/' . 'connect.php';

$result = $db->query(
   "SELECT tekst FROM input"
);

while($row = $result->fetchArray()){
    print(
        $row[0] . '<br>'
    );
}