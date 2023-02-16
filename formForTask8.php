<?php
$inputDate = $_POST['date'];
$currentDate = date("d.m");
$inputDateToArray = explode("-",$_POST['date']);
$day = intval($inputDateToArray[2]);
$month = intval($inputDateToArray[1]);
$sign ="";
if (($month == 3 && ($day >= 21 && $day <= 31)) || ($month == 4 && ($day > 0 && $day <= 20))) {$sign ="Овен";}
else if (($month == 4 && ($day >= 21 && $day <= 30)) || ($month == 5 && ($day > 0 && $day <= 20))) {$sign ="Телец";}           
else if (($month == 5 && ($day >= 21 && $day <= 31)) || ($month == 6 && ($day > 0 && $day <= 20))) {$sign ="Близнецы";}           
else if (($month == 6 && ($day >= 21 && $day <= 30)) || ($month == 7 && ($day > 0 && $day <= 22))) {$sign ="Рак";}            
else if (($month == 7 && ($day >= 23 && $day <= 31)) || ($month == 8 && ($day > 0 && $day <= 22))) {$sign ="Лев";}            
else if (($month == 8 && ($day >= 23 && $day <= 31)) || ($month == 9 && ($day > 0 && $day <= 22))) {$sign ="Дева";}            
else if (($month == 9 && ($day >= 23 && $day <= 30)) || ($month == 10 && ($day > 0 && $day <= 22))) {$sign ="Весы";}            
else if (($month == 10 && ($day >= 23 && $day <= 31)) || ($month == 11 && ($day > 0 && $day <= 21))) {$sign ="Скорпион";}            
else if (($month == 11 && ($day >= 22 && $day <= 30)) || ($month == 12 && ($day > 0 && $day <= 21))) {$sign ="Стрелец";}            
else if (($month == 12 && ($day >= 22 && $day <= 31)) || ($month == 1 && ($day > 0 && $day <= 19))) {$sign ="Козерог";}            
else if (($month == 1 && ($day >= 20 && $day <= 31)) || ($month == 2 && ($day > 0 && $day <= 18))) {$sign ="Водолей";}           
else if (($month == 2 && ($day >= 19 && $day <= 31)) || ($month == 3 && ($day > 0 && $day <= 20))) {$sign ="Рыбы";}
$horoscope = [
    "Овен"=> [
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Телец"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Близнецы"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Рак"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Лев"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Дева"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Весы"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Скорпион"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Стрелец"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Козерог"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Водолей"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ],
    "Рыбы"=>[
        (date("j") % 2 == 0) ? "true":"false" => "прeдсказание1",
        (date("j") % 2 == 1) ? "true":"false" => "прeдсказание2"
    ]
];

echo "Ваш знак - " . $sign . " сегодня сбудется " . $horoscope[$sign]["true"];