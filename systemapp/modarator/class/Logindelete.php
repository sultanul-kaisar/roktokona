<?php
class Logindelete{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function delModeratorLoginHistory($loged_user){
		$query = "DELETE FROM seu_roktokona_logged_in WHERE logged_username = '$loged_user'";
		$delmodaratorlogindata = $this->db->delete($query);
	}
}
?>