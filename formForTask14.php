<?php
//array_walk($_POST,function($value,$key){echo $key ." => " . $value . "<br>";});
echo $_POST['sel1'] .".".$_POST['sel2'].".".$_POST['sel3']." - ";
$array =  array(
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"   
);
echo $array[date("l",mktime(1,1,1,$_POST['sel2'],$_POST['sel1'],$_POST['sel3']))];