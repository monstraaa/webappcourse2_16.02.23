<?php
// echo date("d.m.y");
// echo "<br>";
// echo date("jS");
// echo "<br>";
// echo date("L");
// echo "<br>";
// echo date("z");
echo "<br>";
if(date("L")==1){
    echo "До нового года - ". 366 - date("z"). " Дней" ;
}
if(date("L")==0){
    echo "До нового года - ". 365 - date("z"). " Дней";
}