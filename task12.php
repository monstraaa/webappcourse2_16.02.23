<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="POST" action="formForTask12.php">
    <label>
        <input type="text" name="txt" placeholder="Введите текст" pattern="^[a-zA-ZА-Яа-яЁё\s]+$" >
        <input type="radio" name="rad" value="1">транслит<input type="radio" name="rad" value="2">ретранслит
    </label>
    <input type="submit" name="send" value="Отправить">
</body>
</html>