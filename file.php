<?php

//$file = fopen("text2.txt", "w");
//fclose($file);

$file = file_get_contents('text2.txt');
// также можем в скобках что угодно попросить вывести на экран, например яндекс - $file = file_get_contents('http://yandex.ru');
echo $file;

?>