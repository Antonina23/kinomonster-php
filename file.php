<?php

$myText = "Записываю эту строку в файл";

// w стирает старый текст, добавляет новый
//$file = fopen("text.txt", "w");

// а - добавляет текст в конец документа
$file = fopen("text.txt", "a");

fwrite($file, $myText);

fclose($file);

readfile('text.txt');

?>