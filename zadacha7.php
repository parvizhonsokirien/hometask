<?php
$log=$_POST['log'];
$pass=$_POST['pass'];
if($log==='user' && $pass==='password')
{
    echo 'Авторизация прошло успешно';
}
else
{
    echo 'Неверный логин или пароль';
}
?>