<?php
	
	require_once '../../startterfiles/private/path.php';
    include '../../startterfiles/private/db/connect.php';

	$db->exec("DELETE FROM input");

?>

<!DOCTYPE html>
<!--
Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="../ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Try the latest sample of CKEditor 4 and learn more about customizing your WYSIWYG editor with endless possibilities.">
</head>
<body id="main">
<main></main>
	<form method="post" action="../../startterfiles/private/shared/add.php">
		<div class="adjoined-bottom">
			<div class="grid-container">
				<div class="grid-width-100">
					<textarea cols="80" id="editor" name="editor" rows="15">
					</textarea>
					<p>
						<input type="submit" value="submit" name="submitBtn">
					</p>
				</div>
			</div>
		</div>
	</form>
	<a href="../../startterfiles/public/index.php">Index PHP</a>
<script>
	initSample();
</script>

</body>
</html>