<?php

//print_r($_POST);

// защита от взлома:
if(isset($_POST['name'])) {
	$nameFilter = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	echo "Мое имя ".$nameFilter;
}



?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> 

<form action="/" method="post">
	<input type="text" name="name" placeholder="Ваше имя">
	<textarea name="comment"></textarea>
	<input type="hidden" name="user_id" value="666">
	<input type="submit" value="отправить">
</form>

</body>
</html>

