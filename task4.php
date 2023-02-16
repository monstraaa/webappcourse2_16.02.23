<?php
$ruDay = [
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота",
    "Sunday" => "Воскресенье"
];
$ruMonth = [
	"Jan"=>'января',
    "Feb"=>'февраля',
    "Mar"=>'марта',
	"Apr"=>'апреля',
    "May"=>'мая',
    "Jun"=>'июня',
	"Jul"=>'июля',
    "Aug"=>'августа',
    "Sep"=>'сентября',
	"Oct"=>'октября',
    "Nov"=>'ноября',
    "Dec"=>'декабря'
];
$date = date("d M Y \г\о\д\а, l ");
//echo $date;
$dateArray = explode(" ",$date);
$dateArray[4] = $ruDay[$dateArray[4]];
$dateArray[1] = $ruMonth[$dateArray[1]];
$result =  implode(" ",$dateArray);
echo $result;
// foreach ($dateArray as $key => $value) {
//     echo $value. " ";
// }
