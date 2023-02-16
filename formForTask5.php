<?php
echo "c " . $_POST['date'];
echo "<br>";
//echo date("Y-m-d");
//echo "<br>";
$inputDate = explode("-",$_POST['date']);
$currentDate = explode("-",date("Y-m-d"));
echo $currentDate[0] - $inputDate[0] . " - Полных лет ";

// echo "<br>";
// for ($i=0; $i < 3; $i++) { 
//     echo $inputDate[$i]."-".$currentDate[$i]." ";
// }