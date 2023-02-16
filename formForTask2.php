<?php
if(date("L",mktime(1,1,1,1,1,$_POST['year']))== 1){
    echo "Год ".$_POST['year']." вискосный";
}
else{
    echo "Год ".$_POST['year']." не вискосный";
}