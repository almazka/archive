<?php
class main extends ACore
{
	public function get_content()
	{
		$sql = "SELECT * FROM articles ORDER BY date DESC";
		$result = mysql_query($sql) or die(mysql_error());
		$result = db2array($result);
		echo "<div id='main'>";
		foreach ($result as $value) {
			echo "<div style='margin:10px;border-bottom:2px solid #c2c2c2'><p style='font-size:18px'>".$value['title']."</p><p>".$value['description']."</p><p><img style='margin-right=5px;' src='".$value['img_src']."'></p><a href='?option=view&id=".$value['id']."'>Читать далее...</a></div>";
		}
		echo "</div></div>";
	}
}

?>