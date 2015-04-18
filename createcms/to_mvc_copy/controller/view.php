<?php
class view extends ACore
{
	
	public function get_content()
	{
		echo '<div id="main">';
		if (!$_GET['id']) {
			echo "Не правильные данные для вывода статьи";
		} else {
				$id_text = (int)$_GET['id'];
			if (!$id_text) {
				echo "Не правильные данные для вывода статьи";
			} else {
				$sql = "SELECT title,text,date,img_src FROM articles WHERE id='$id_text'";
			$result = mysql_query($sql) or die(mysql_error());
			$result = mysql_fetch_array($result,MYSQL_ASSOC);
				printf("<p style='font-size:18px'>%s</p>
							<p>%s</p>
							<p><img style='margin-right:5px' width='150px' align='left' src='%s'>%s</p>"
							,$result['title'],$result['date'],$result['img_src'],$result['text']);
					}
				}
		echo '</div>
			</div>';
	}
}
?>