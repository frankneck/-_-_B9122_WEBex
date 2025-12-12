<?php
$users = json_decode(file_get_contents("users.json"), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["username"];
    $pass = $_POST["password"];

    if (isset($users[$login]) && $users[$login] == $pass) {
        setcookie("username", $login, time() + 3600);
        header("Location: greet.php");
        exit;
    } else {
        echo "Неверные данные!";
    }
}
?>
<form method="POST">
    <h2>Вход</h2>
    <input name="username" placeholder="Логин" required><br>
    <input name="password" placeholder="Пароль" required><br>
    <button type="submit">Войти</button>
</form>
