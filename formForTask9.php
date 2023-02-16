<?php
echo "в { ". $_POST['text'] . " }";
echo "<br>";
echo "Слов: " . str_word_count($_POST['text'], 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
echo "<br>";
echo "Символов: " .mb_strlen($_POST['text']);// regular strlen counts incorrectly 
echo "<br>";
echo "Символов без пробелов: " .mb_strlen(str_replace(' ', '', $_POST['text']));