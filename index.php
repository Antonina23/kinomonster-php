<?php

	define("DBNAME", "kinomonster");

	$nickname = "Pukki";

	$balance = 0;
	$addBalance1 = 10;
	$addBalance2 = 35;

	$balance = $addBalance1 + $addBalance2;

	$svetofor = "";
	/*if($svetofor == "green") {
		echo "Светофор зеленый. Я перехожу дорогу";
	} else if($svetofor == "yellow") {
		echo "Сейчас светофор желтый";
	}
	else {
		echo "Жду, когда загорится зеленый";
	}*/

	switch ($svetofor) {
		case 'green':
	echo "Светофор зеленый. Я перехожу дорогу";
			break;
		case 'yellow':
	echo "Сейчас светофор желтый";
			break;
		case 'red':
	echo "Жду, когда загорится зеленый";
			break;
		default:
	echo "Светофор сломался, пойду искать другой пешеходный переход";
			break;
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 
	<div><!--Hello,--> <?php //echo $nickname; ?></div>
	<?php
		/*echo "<div>".$balance."</div>";
		echo DBNAME;*/
	?>
</body>
</html>

