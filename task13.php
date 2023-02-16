<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="POST" action="formForTask13.php">
    <label>
        <?php
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
                    echo "
                        <div style='border:1px solid black; width:fit-content; margin-bottom:5px; border-radius:5px; padding:2px;'>
                            <p>$q</p>
                            <p>$qstTxt</p>
                            <input type='text' name='qst$counter'>
                        </div>
                    ";
                    $counter++;
                }
        ?>
        
    </label>
    <br>
    <input type="submit" name="send" value="Отправить">
</body>
</html>