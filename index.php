<?php

$mysqli = new mysqli('localhost', 'root', '', 'kinomonster');

if(mysqli_connect_error()) {
	printf("Соединение не установлено", mysqli_connect_error());
	exit();
}

$mysqli->set_charset('utf8');

/*$query = $mysqli->query('SELECT * FROM movie');

while ($row = mysqli_fetch_assoc($query)) {
	echo $row['name'].$row['year']."<br>";
}*/

$query = "INSERT INTO movie VALUES(null, 'Фантастические твари и где они обитают - преступления Грин-де-Вальда', 'Вторая часть невероятно захватывающей сказки', '2018', Now())";
$mysqli->query($query);

$mysqli->close();

?>

