<?php
// добавление в массив:
$arr = ["продукты", "бутылка воды"];

//unset($arr[0]);

array_push($arr, "яблоко");

//добавление в начало:
array_unshift($arr, "апельсин");
array_push($arr, "апельсин");

$arr = array_unique($arr);

$arr2 = array("кокос", "арбуз", "банан");

$newarr = array_merge($arr, $arr2);

foreach ($newarr as $key => $value) {
	echo "Ключ к массиву: ".$key." - Значение массива: ".$value."<br>";
}

// преобразует массив в строку:
/*$str = implode(", ", $newarr);
echo "<br>".$str;*/

// преобразует строку в массив:
$str = "продукты, бутылка воды, кокос, банан";
$strtoarr = explode(", ", $str);
echo "<pre>";
print_r($strtoarr);
echo "</pre>";
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

