<?php

function sum($a, $b) {
	$result = false;

	if(!is_numeric($a)) {
		$result = "Ошибка. Значение А не является числом";
	} else if(!is_numeric($b)) {
		$result = "Ошибка. Значение B не является числом";
	} else {
		$result = $a + $b;
	}
	return $result;
}

function maxSum($sum) {
	$result = false;

	if($sum > 30) {
		$result = "Сумма больше 30";
	} else {
		$result = "Сумма меньше 30";
	}
	return $result;
}

echo sum(2, 30);
echo maxSum(sum(2,30));
?>

