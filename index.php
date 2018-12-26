<?php

/*$camera["row1"][0] = "продукты";
$camera["row1"][1] = "сумка";
$camera["row2"][0] = "апельсин";
$camera["row2"][1] = "фотоаппарат";
$camera["row2"][2] = "телефон";

echo "<pre>";
print_r($camera);
echo "</pre>";

foreach ($camera as $key => $value) {
	foreach ($value as $key2 => $value2) {
		echo $value2;
	}
}*/

$camera["market1"]["row1"][0] = "продукты";
$camera["market1"]["row1"][1] = "сумка";
$camera["market1"]["row2"][0] = "апельсин";
$camera["market2"]["row2"][1] = "фотоаппарат";
$camera["market2"]["row2"][2] = "телефон";

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

