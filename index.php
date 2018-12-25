<?php

/*$arr[0] = "продукты";
$arr[1] = "бутылка с водой";*/

/*echo $arr[0];*/
/*print_r($arr);
echo count($arr);*/

/*for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i]."<br>";
}*/

$arr[products] = "продукты";
$arr[water] = "бутылка с водой";

foreach ($arr as $key => $value) {
	echo $value."<br>";
	echo "Ключ к массиву: ".$key." - Значение массива: ".$value."<br>";
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

