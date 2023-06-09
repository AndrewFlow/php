<?php
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];
if (trim($name) == "" || trim($email) == "" || trim($password) == "" || trim($message) == "") {
    echo 'Заполните все поля';
} else if (strlen(trim($name)) <= 2) {
    echo "Имя должно содержать не менее 2 символов";
} else if (preg_match('/[a-zA-Z0-9äöüß "!§$%&\/()=[\]\?.:,;\-_]/u', $name)) {
    echo "Введите имя на кириллице без посторонних символов и цифр";
} else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo 'Укажите email в правильном формате';
} else header('Location:index.php');
    exit;
?>