<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать</title>
</head>
<body>
    <h2>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Выйти</a>

</body>

</html>