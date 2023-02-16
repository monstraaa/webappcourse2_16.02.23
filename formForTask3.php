<?php
echo $_POST['date'];
echo "<br>";
$date = explode("-",$_POST['date']);
echo "<br>";
$ru = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];
echo $ru[date("l",mktime(1,1,1,$date[1],$date[2],$date[0]))];