<?php

$SQLitePDO = new PDO('sqlite:database/sales.db');

$result = $SQLitePDO->query("SELECT sales FROM sale");

foreach($result as $row) {
	print $row['sales'] . '<br>';
}

?>
