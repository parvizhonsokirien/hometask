<?php
$a=1;
$b=5;
$c=2;
$d=$b*$b-4*$a*$c;
echo "diskriminant raven<br> $d<br>";
if($d>0)
{
    $x1=(-$b+sqrt($d))/(2*$a);
    $x2=(-$b-sqrt($d))/(2*$a);
    echo "x1=$x1 <br> i <br> x2=$x2";
}
else if($d==0)
{
    $x=-$b/(2*$a);
    echo "x=$x";
}
else
{
    echo "net otweta";
}

?>