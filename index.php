<?php

$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

if(mysqli_connect_error()) {
	printf("Соединение не установлено", mysqli_connect_error());
	exit();
}

$mysqli->set_charset('utf8');

$query = "DELETE FROM movie WHERE id = 3";
$mysqli->query($query);

$mysqli->close();

?>

