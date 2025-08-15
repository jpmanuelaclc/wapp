<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_POST['loginUser'])) {
    $_SESSION["userSession"] = $_POST["username"];
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Bitcount:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="content">
        <form method="POST">
            <label for="username">User</label>
            <input type="text" name="username" required>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="loginUser" value="Login">
        </form>
    </div>
</body>


</html>
