<?php

$camera = array(
	"market1"=>array(
		"row1"=>array(
			"продукты", "сумка"
		),
		"row2"=>array(
			"апельсин", "фотоаппарат", "телефон"
		)
	),
	"market2"=>array(
		"row1"=>array(
			"сушки", "пицца"
		),
		"row2"=>array(
			"кокос", "коробка", "ключи"
		)
	)
);

echo "<pre>";
print_r($camera);
echo "</pre>";

foreach ($camera as $key => $value) {
	foreach ($value as $key2 => $value2) {
		foreach ($value2 as $key3 => $value3) {
			echo $value3;
		}
	}
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

