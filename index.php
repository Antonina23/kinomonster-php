<?php

//print_r($_GET);

echo $_GET['name'];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<form action="/" method="get">
	<input type="text" name="name" placeholder="Ваше имя">
	<input type="submit" value="отправить">
</form>

</body>
</html>

