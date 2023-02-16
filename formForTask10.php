<?php
echo "в { ". $_POST['text'] . " }";
echo "<br>";
echo "Символов: " .mb_strlen(str_replace(' ', '', $_POST['text']));
echo "<br>";
$values = array_count_values(mb_str_split(str_replace(' ', '', $_POST['text'])));
$len = count(mb_str_split(str_replace(' ', '', $_POST['text'])));
// foreach (count($values) as $key => $value) {
//     echo "$key => $value ";
//     echo "<br>";
// }
foreach ($values as $key => $value) {
    echo " Символа: $key " . round(100/($len/$value),3) . "%";
    echo "<br>";
}