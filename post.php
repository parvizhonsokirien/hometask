<?php
if(isset($_POST['fio']) && !empty($_POST['fio']))
{
$fio=$_POST['fio'];
echo "Calom ".$fio;
}
?>