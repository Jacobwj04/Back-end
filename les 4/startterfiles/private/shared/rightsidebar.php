<?php
    include DATABASE_PATH . '/' . 'connect.php';

$result = $db->query(
   "SELECT artiekelnaam, datum, artiekels FROM artiekel ORDER BY id" 
);

while($row = $result->fetchArray()){
    print(
        $row[0] . '<br>'.
        $row[1] . '<br>'.
        $row[2] . '<br><br>'
    );
}

