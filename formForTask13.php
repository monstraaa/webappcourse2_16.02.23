<?php
//array_walk($_POST,function($value,$key){echo $key ." => " . $value . "<br>";});
$qa = [
    "Вопрос 1" => [
        "Вопрос" => "Какая цифра в ответе?",
        "Ответ" =>"1"
    ],
    "Вопрос 2" => [
        "Вопрос" => "Какое число в ответе?",
        "Ответ" =>"2"
    ],
    "Вопрос 3" => [
        "Вопрос" => "Сколько углов у теруглоьника?",
        "Ответ" =>"3"
    ],
    "Вопрос 4" => [
        "Вопрос" => "2 х 2 = ?",
        "Ответ" =>"4"
    ],
    "Вопрос 5" => [
        "Вопрос" => "Сколько вопросов в этом тесте?",
        "Ответ" =>"5"
    ]
];
$counter = 1;
foreach ($qa as $q => $qaArray) {
    $qstTxt = $qaArray['Вопрос'];
    $answer = $_POST['qst'.$counter];
    $correctAnswer = $qaArray['Ответ'];
    $isAnswCorrect = ($answer == $correctAnswer)? true:false;
    $color = $isAnswCorrect?'green':'red';
    if($isAnswCorrect){
        echo "
        <div style='border:1px solid black; width:fit-content; margin-bottom:5px; border-radius:5px; padding:2px;'>
            <p>$q</p>
            <p>$qstTxt</p>
            <p style='background-color:$color; color:white;'>Ответ: $answer - верен!</p>
        </div>
        ";
        $counter++;
    }
    else if(!$isAnswCorrect){
        echo "
        <div style='border:1px solid black; width:fit-content; margin-bottom:5px; border-radius:5px; padding:2px;'>
            <p>$q</p>
            <p>$qstTxt</p>
            <p style= 'background-color:$color;'>Ответ: $answer - неверен!</p>
            <p style= 'background-color:yellow;'>Правильный ответ: $correctAnswer!</p>
        </div>
        ";
        $counter++;
    }
    
}               
