<?php
$plus=$_POST['plus'];
if($plus>0)
{
    echo "$plus<br>";
}
else if($plus<0)
{
    echo "Число $plus отрицательное<br>";
}
else
{
    echo "$plus=0<br>";
}

$god=$_POST['god'];
if($god==1)
{
    echo "Январ<br>";
}
else if($god==2)
{
    echo "Февраль<br>";
}
else if($god==3)
{
    echo "Март<br>";
}
else if($god==4)
{
    echo "Апрель<br>";
}
else if($god==5)
{
    echo "Май<br>";
}
else if($god==6)
{
    echo "Июнь<br>";
}
else if($god==7)
{
    echo "Июль<br>";
}
else if($god==8)
{
    echo "<br>Август";
}
else if($god==9)
{
    echo "<br>Сентябрь";
}
else if($god==10)
{
    echo "<br> Октябр";
}
else if($god==11)
{
    echo "<br> Ноябр";
}
else if($god==12)
{
    echo "<br>Декабр";
}

$a=$_POST['a'];
$b=$_POST['b'];
$c=$a/$b;
    echo "<br>$a делит нa $b равно = $c";

$sol=$_POST['sol'];
if(($sol<13) && ($sol>0)) 
{
    echo "<br>$sol детсад <br>";
}
else if(($sol>12) && ($sol<21))
{
    echo "<br>$sol подросток <br>";
}
else if(($sol>21) && ($sol<68))
{
    echo "<br>$sol взрослый <br>";
}
else if(($sol>68) && ($sol<140))
{
    echo "<br>$sol пожилой <br>";
}



$so=$_POST['so'];
if(($so>=3) && ($so<=5))
{
    echo "Весна";
}
else if(($so>=6) && ($so<=8))
{
    echo "Лето";
}
else if(($so>=9) && ($so<=11))
{
    echo "Осен";
}
else if(($so==12) && ($so==1) && ($so==2))
{
    echo "Зима";
}

$A=$_POST['A'];
$B=$_POST['B'];
$C=$B*$A;
echo "<br>$B умножать на $A равно = $C<br>";
?>