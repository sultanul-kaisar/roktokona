<?php
class Logindelete{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function delAdminLoginHistory($loged_user){
		$query = "DELETE FROM w3a_logged_in WHERE logged_username = '$loged_user'";
		$deladminlogindata = $this->db->delete($query);
	}
}
?>