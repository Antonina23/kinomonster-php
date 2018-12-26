<?php
// добавление в массив:
$arr = ["продукты", "бутылка воды"];

//unset($arr[0]);

array_push($arr, "яблоко");

//добавление в начало:
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");

$arr = array_unique($arr);
$arr = array_reverse($arr);

sort($arr);

//перемешивание содержимого, когда нужно рандомное значение каждый раз:
shuffle($arr);

foreach ($arr as $key => $value) {
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

