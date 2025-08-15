<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>dfgdf</title>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="content">
        <h1><?= $_SESSION["name"] ?></h1>
    </div>

</body>

</html>