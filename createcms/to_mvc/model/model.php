<?php
class model
{
	
	protected $db;
	
	public function __construct()
	{
		$this->db = mysql_connect(HOST,USER,PASSWORD,DB_NAME) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());
	
	}
	/*public function db2array($data)
		{
		$arr = array();
		while ($row = mysql_fetch_assoc($data)) {
			$arr[] = $row;
		}
		return $arr;
		}*/
	public function get_left_bar()
	{
		$sql = "SELECT id, name FROM category";
		$result = mysql_query($sql) or die (mysql_error());
		//$result = $this->db2array($result);
		for($i = 0; $i < mysql_num_rows($result); $i++) {
			$resarray[] = mysql_fetch_array($result, MYSQL_ASSOC);
		}
		return $resarray;
	}

	public function menu_array()
	{
		$sql = "SELECT id, name FROM menu";
		$result = mysql_query($sql) or die (mysql_error());
		$resarray = array();
		for($i = 0;$i < mysql_num_rows($result); $i++) {
			$resarray[] = mysql_fetch_array($result, MYSQL_ASSOC);
		}
		return $resarray;
		//$result = $this->db2array($result);
		//return $result;
	}
	
	public function get_main_content()
	{
		$sql = "SELECT id, title,description,date,img_src FROM articles ORDER BY date DESC";
		$result = mysql_query($sql) or die(mysql_error());
		for($i = 0; $i < mysql_num_rows($result);$i++) {
			$resarray[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}
		
		return $resarray;
		//$result = $this->db2array($result);
		//return $result;
	}
	
	public function get_category_content($id_cat)
	{
		$sql = "SELECT id,title,description,date,img_src FROM articles WHERE category_id='$id_cat' ORDER BY date DESC";
		$result = mysql_query($sql) or die(mysql_error());
		$resarray = array();
				for($i = 0; $i < mysql_num_rows($result);$i++) {
					$resarray[] = mysql_fetch_array($result,MYSQL_ASSOC);
				}
				return $resarray;
		//$result = $this->db2array($result);
		//return $result;
	}
	public function get_menu_content($id_menu)
	{
		$sql = "SELECT id,name,text FROM menu WHERE id='$id_menu'";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result,MYSQL_ASSOC);
		return $row;
	}
}
	
?>