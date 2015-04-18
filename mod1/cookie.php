<?php
$i = 0;
if (isset($_COOKIE["i"])) {
	$i = $_COOKIE["i"];
	$i++;
}
if (isset($_COOKIE["name"]) and isset($_COOKIE["time"])){
	$cnt = $_COOKIE["name"];
	$dt = $_COOKIE["time"];
}
setcookie("i", $i);
setcookie("name", "John");
setcookie("time", date("d M Y H:i:s"));
/*
ЗАДАНИЕ 1
- Инициализируйте переменную для подсчета количества посещений
- Если соответствующие данные передавались через куки
  сохраняйте их в эту переменную
- Нарастите счетчик посещений
- Инициализируйте переменную для хранения значения последнего посещения страницы
- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную
- Установите соответствующие куки
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Последний визит</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Последний визит</h1>

<?php
if ($i==1) {
	echo "Добро пожаловать! <br>";
}
else {
	echo "Привет, $cnt! Вы пришли уже в $i раз. Последнее посещение - $dt";
}

/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего посещения
*/
?>

</body>
</html>