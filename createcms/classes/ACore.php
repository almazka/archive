<?php
function db2array($data)
{
	$arr = array();
	while ($row = mysql_fetch_assoc($data)) {
		$arr[] = $row;
	}
	return $arr;
}
abstract class ACore
{
	protected $db;
	public function __construct()
	{
		$this->db = mysql_connect(HOST,USER,PASSWORD,DB_NAME) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());
	
	}
	protected function get_header()
	{
		include 'header.php';
	}
	protected function get_left_bar()
	{
		$sql = "SELECT id, name FROM category";
		$result = mysql_query($sql) or die (mysql_error());
		$result = db2array($result);
			echo '<div class="quick-bg">
			<div id="spacer" style="margin-bottom:15px;">
				<div id="rc-bg">Теги:</div>
			</div>';
			foreach ($result as $value) {
				echo "<div class='quick-links'><a href='?option=category&id=".$value['id']."'>".$value['name']."</a></div>";
			}
			echo "</div>";
	}
	protected function get_menu()
	{
		$sql = "SELECT id, name FROM menu";
		$result = mysql_query($sql) or die (mysql_error());
		$result = db2array($result);
			echo '<div id="mainarea">
			<div class="heading"><div class="toplinks" style="padding-left:30px;"><a href="?option=main">Главная</a></div> ';
			foreach ($result as $value) {
				echo "<div class='sap2'>::</div><div class='toplinks'><a href='?option=menu&id=".$value['id']."'>".$value['name']."</a></div>";
			}
			echo "</div>";

	}
	protected function get_footer()
	{
		$sql = "SELECT id, name FROM menu";
		$result = mysql_query($sql) or die (mysql_error());
		$result = db2array($result);
		echo '<div id="bottom"><div class="toplinks" style="padding-left:127px;"><a href="?option=main">Главная</a></div> ';
			foreach ($result as $value) {
				echo "<div class='sap2'>::</div><div class='toplinks'><a href='?option=menu&id=".$value['id']."'>".$value['name']."</a></div>";
			}
			echo "</div><div class='copy'><span class='style1'>&copy; SuperWebmaster,  ".date(Y)."</span></div></div></center></body></html>";
	}
	public function get_body()
	{
		if ($_POST) {
			$this->handler();
		}
		$this->get_header();
		$this->get_left_bar();
		$this->get_menu();
		$this->get_content();
		$this->get_footer();
	}
	abstract function get_content();
}
?>