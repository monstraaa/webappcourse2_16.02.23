<?php
echo $_POST['month'] ."-".$_POST['day'];
echo "<br>";

$month = $_POST['month'];
$day = $_POST['day'];

if (($month == 3 && ($day >= 21 && $day <= 31)) || ($month == 4 && ($day > 0 && $day <= 20)))
echo("Знак зодиака: Овен");
else if (($month == 4 && ($day >= 21 && $day <= 30)) || ($month == 5 && ($day > 0 && $day <= 20)))
echo("Знак зодиака: Телец");           
else if (($month == 5 && ($day >= 21 && $day <= 31)) || ($month == 6 && ($day > 0 && $day <= 20)))
echo("Знак зодиака: Близнецы");           
else if (($month == 6 && ($day >= 21 && $day <= 30)) || ($month == 7 && ($day > 0 && $day <= 22)))
echo("Знак зодиака: Рак");            
else if (($month == 7 && ($day >= 23 && $day <= 31)) || ($month == 8 && ($day > 0 && $day <= 22)))
echo("Знак зодиака: Лев");            
else if (($month == 8 && ($day >= 23 && $day <= 31)) || ($month == 9 && ($day > 0 && $day <= 22)))
echo("Знак зодиака: Дева");            
else if (($month == 9 && ($day >= 23 && $day <= 30)) || ($month == 10 && ($day > 0 && $day <= 22)))
echo("Знак зодиака: Весы");            
else if (($month == 10 && ($day >= 23 && $day <= 31)) || ($month == 11 && ($day > 0 && $day <= 21)))
echo("Знак зодиака: Скорпион");            
else if (($month == 11 && ($day >= 22 && $day <= 30)) || ($month == 12 && ($day > 0 && $day <= 21)))
echo("Знак зодиака: Стрелец");            
else if (($month == 12 && ($day >= 22 && $day <= 31)) || ($month == 1 && ($day > 0 && $day <= 19)))
echo("Знак зодиака: Козерог");            
else if (($month == 1 && ($day >= 20 && $day <= 31)) || ($month == 2 && ($day > 0 && $day <= 18)))
echo("Знак зодиака: Водолей");           
else if (($month == 2 && ($day >= 19 && $day <= 31)) || ($month == 3 && ($day > 0 && $day <= 20)))
echo("Знак зодиака: Рыбы");
