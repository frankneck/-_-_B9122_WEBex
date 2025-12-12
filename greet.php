<?php
if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
    exit;
}
echo "Привет, " . $_COOKIE["username"] . "!";
?>
<br><a href="logout.php">Выйти</a>
