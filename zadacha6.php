<?php
$name=$_GET['name'];
echo "<br>Привет,$name!<br>";

$age=$_GET['age'];
if($age>=18)
{
    echo '<br>Доступ разрещён';
}
else
{
    echo '<br>Доступ запрещён';
}
?>