<?php
class category extends ACore
{
	public function get_content()
	{
		echo "<div id='main'>";
		if (!$_GET['id']) {
			echo "Не правильные данные для вывода статьи";
		} else {
			$id_cat = (int)$_GET['id'];
		}
		if (!$id_cat) {
			echo "Не правильные данные для вывода статьи";
		} else {
		$sql = "SELECT * FROM articles WHERE category_id='$id_cat' ORDER BY date DESC";
		$result = mysql_query($sql) or die(mysql_error());
		if (mysql_num_rows($result) > 0) {
			$result = db2array($result);
			foreach ($result as $value) {
			echo "<div style='margin:10px;border-bottom:2px solid #c2c2c2'><p style='font-size:18px'>".$value['title']."</p><p>".$value['description']."</p><p><img style='margin-right=5px;' src='".$value['img_src']."'></p><a href='?option=view&id=".$value['id']."'>Читать далее...</a></div>";
		}
		} else {
			echo "В категории нет записей";
		}
		
		
		}
	echo "</div></div>";
	}
}
?>