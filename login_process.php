<?php
session_start();

if (!isset($_SESSION['valid_users'])) {
    $_SESSION['valid_users'] = [
        'user' => 'password',
        'Настя' => '228'
    ];
}

$username = $_POST['username'];
$password = $_POST['password'];
$remember_me = isset($_POST['remember_me']) ? true : false;//проверка хочет ли пользователь, чтоб его запомнили

$valid_users = &$_SESSION['valid_users'];

if (isset($valid_users[$username]) && $valid_users[$username] === $password) {//проверка зарегистрирован ли пользователь
    //запоминаем имя в куки
    if ($remember_me) {
        setcookie('username', $username, time() + (86400 * 30), "/");
    }
    header("Location: welcome.php");// переходим на страницу приветствия
} else {
    $_SESSION['username'] = $username;
    $_SESSION['verificated'] = true;
    if ($remember_me) {
        setcookie('username', $username, time() + (86400 * 30), "/");// запоминаем куки
    }
    $valid_users[$username] = $password;
    header("Location: Successful_registration.html");// переходим на страницу завершения регистрации
}
?>
