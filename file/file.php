<?php
define(FILENAME, "fileuser.txt");
function Clear($value)
{
	return trim(strip_tags($value));
}

if (isset($_POST["fname"]) and isset($_POST["lname"])) {
	$name = Clear($_POST["fname"]);
	$lmane = Clear($_POST["lname"]);
	$datas = $name." ".$lmane;
	file_put_contents(FILENAME, "$datas\n", FILE_APPEND);
	header("Location: file.php");
	exit;
}

/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Выполните перезапрос текущей страницы (чтобы избавиться от данных, отправленных методом POST)
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Работа с файлами</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Имя: <input type="text" name="fname" /><br />
Фамилия: <input type="text" name="lname" /><br />

<br />

<input type="submit" value="Отправить!" />

</form>

<?php
if (file_exists(FILENAME)) {
	$filearr = file(FILENAME);
	if (is_array($filearr)) {
		$filearr = array_reverse($filearr);
	
	echo "<ol>";
	foreach ($filearr as $value) {
		echo "<li>".$value."</li>";
	}
	echo "</ol>";
	echo "Размер файла = ".filesize(FILENAME)."байт";
}}
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/
?>

</body>
</html>