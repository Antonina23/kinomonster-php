<?php

print_r($_POST);

/*if(isset($_POST['name'])) {
	echo "Мое имя ".$_POST['name'];
}
*/
$user = "     ВаСЯ     ";
// удаляем пробелы из начала и из конца:
//echo trim($user);

// все прописные буквы в строчные:
echo mb_strtolower(trim($user));

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

