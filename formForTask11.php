<?php
$replacements = [
    "А"=>"A","а"=>"a",
    "Б"=>"B","б"=>"b",
    "В"=>"V","в"=>"v",
    "Г"=>"G","г"=>"g",
    "Д"=>"D","д"=>"d",
    "Е"=>"E","е"=>"e",
    "Ё"=>"E","ё"=>"E",
    "Ж"=>"Zh","ж"=>"zh",
    "З"=>"Z","з"=>"z",
    "И"=>"I","и"=>"i",
    "Й"=>"Y","й"=>"y",
    "К"=>"K","к"=>"k",
    "Л"=>"L","л"=>"l",
    "М"=>"M","м"=>"m",
    "Н"=>"N","н"=>"n",
    "О"=>"O","о"=>"o",
    "П"=>"P","п"=>"p",
    "Р"=>"R","р"=>"r",
    "С"=>"S","с"=>"s",
    "Т"=>"T","т"=>"t",
    "У"=>"U","у"=>"u",
    "Ф"=>"F","ф"=>"f",
    "Х"=>"H","х"=>"h",
    "Ц"=>"C","ц"=>"c",
    "Ч"=>"Ch","ч"=>"ch",
    "Ш"=>"Sh","ш"=>"sh",
    "Щ"=>"Sch","щ"=>"sch",
    "Ъ"=>"`", "ъ"=>"`",
    "Ы"=>"Y","ы"=>"y",
    "Ь"=>"`","ь"=>"`",
    "Э"=>"E","э"=>"e",
    "Ю"=>"Yu","ю"=>"yu",
    "Я"=>"Ya","я"=>"ya"
];
echo $_POST["ru"] . " - ";
$translitArray = mb_str_split($_POST["ru"]);
$result = array_map(function($value){
    $replacements = [
        "А"=>"A","а"=>"a",
        "Б"=>"B","б"=>"b",
        "В"=>"V","в"=>"v",
        "Г"=>"G","г"=>"g",
        "Д"=>"D","д"=>"d",
        "Е"=>"E","е"=>"e",
        "Ё"=>"E","ё"=>"E",
        "Ж"=>"Zh","ж"=>"zh",
        "З"=>"Z","з"=>"z",
        "И"=>"I","и"=>"i",
        "Й"=>"Y","й"=>"y",
        "К"=>"K","к"=>"k",
        "Л"=>"L","л"=>"l",
        "М"=>"M","м"=>"m",
        "Н"=>"N","н"=>"n",
        "О"=>"O","о"=>"o",
        "П"=>"P","п"=>"p",
        "Р"=>"R","р"=>"r",
        "С"=>"S","с"=>"s",
        "Т"=>"T","т"=>"t",
        "У"=>"U","у"=>"u",
        "Ф"=>"F","ф"=>"f",
        "Х"=>"H","х"=>"h",
        "Ц"=>"C","ц"=>"c",
        "Ч"=>"Ch","ч"=>"ch",
        "Ш"=>"Sh","ш"=>"sh",
        "Щ"=>"Sch","щ"=>"sch",
        "Ъ"=>"`", "ъ"=>"`",
        "Ы"=>"Y","ы"=>"y",
        "Ь"=>"`","ь"=>"`",
        "Э"=>"E","э"=>"e",
        "Ю"=>"Yu","ю"=>"yu",
        "Я"=>"Ya","я"=>"ya"
    ];
    if(array_key_exists($value,$replacements)){
        $value = $replacements[$value];
        return $value;
    }
    else{
        return $value;
    }
},$translitArray);
echo implode("",$result);