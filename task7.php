<?php
$holydays = [
    "1.1"=>"Праздник1",
    "23.2"=>"Праздник2",
    "7.1"=>"Праздник3",
    "8.3"=>"Праздник4",
    "1.5"=>"Праздник5",
    "9.5"=>"Праздник6",
    "12.6"=>"Праздник7",
    "4.11"=>"Праздник8",
    "2.4"=>"Праздник9",
    "13.8"=>"Праздник10"
];

if(array_key_exists (date("j.n"),$holydays)){
    $day = $holydays[date("j.n")];
    echo "поздравляем с $day";
}
else{
    echo date("d.m") . " праздников нет";
}