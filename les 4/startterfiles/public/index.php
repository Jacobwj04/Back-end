<?php
require_once '../private/path.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/cms.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body id="main">

<div class="wrapper">

    <div class="navbar">
        <?php
        include SHARED_PATH . '/navigationbar.php';
        ?>
    </div>

    <div class="sidebar-left">
        <?php
        include SHARED_PATH . '/leftsidebar.php';
        ?>
    </div>

    <div class="sidebar-right">
    <?php
        include SHARED_PATH . '/rightsidebar.php';
        ?>
    </div>
    <div class="footer">
        <?php
            include SHARED_PATH . '/footer.php';
        ?>
        <a href=""></a>
    </div>
</div>

</body>
</html>


