<?php
class menu extends ACore
{
	
	public function get_content()
	{
		if (!$_GET['id']) {
			echo "Не правильные данные для вывода меню";
		} else {
			$id_menu = (int)$_GET['id'];
		}
		if (!$id_menu) {
			echo "Не правильные данные для вывода статьи";
		}
		$sql = "SELECT id,name,text FROM menu WHERE id='$id_menu'";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
		printf("<p style='font-size:18px'>%s</p><p>%s</p>",$row['name'],$row['text']);
		
		echo "</div>";
		
		}
}
?>