<?php

//readfile('text.txt');

$handle = fopen("text.txt", "r");

if($handle) {
	while(($line = fgets($handle)) !== false) {
		echo $line;
	}
	fclose($handle);
}

?>