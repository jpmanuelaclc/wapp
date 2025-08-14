<?php
$href = "";
$logoutBtn = "<a href='logout.php'>Logout</a>";
if (!isset($_SESSION["userSession"])) {
    $href = "login.php";
    $logoutBtn = "";
}
$save = $_SESSION["saveSession"] ?? "";
?>

<div class="navbar">
    <a><?= $save ?></a>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Call Us</a>
    <a href="<?= $href ?>"><?= $_SESSION["userSession"] ?? "Login First" ?></a>
    <?= $logoutBtn ?>
</div>