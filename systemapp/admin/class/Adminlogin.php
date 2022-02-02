<?php
	include'core/Session.php';
	
	Session::checkAdminLogin();

	include 'core/Database.php';
	include'core/Format.php';
?>

<?php
class Adminlogin{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function adminLogin($admin_username,$admin_password){
		
		$admin_username = $this->fm->validation($admin_username);
		
		$admin_password = $this->fm->validation($admin_password);
		
		$admin_username = mysqli_real_escape_string($this->db->link,$admin_username);
		
		$admin_password = mysqli_real_escape_string($this->db->link,$admin_password);
		
		if(empty($admin_username) || empty($admin_password)){
			$loginmsg = "
				<div class='alert alert-danger text-center'>
					  <strong>Oh opps!</strong> Username or password can not be empty.
				</div>
			";
			return $loginmsg;
		}else {
			$query = "SELECT * FROM w3a_users WHERE user_name = '$admin_username' AND user_password = '$admin_password'";
			$result = $this->db->select($query);
			if($result != false){
				$value = $result->fetch_assoc();
				
				if($value['user_status'] == 0){
					$loginmsg = "
					<div class='alert alert-danger text-center'>
					  <strong>Oh Oops!</strong>  Your account has been deactivated.
					</div>
					";
					return $loginmsg;
				}else{
					if($value['user_role_id'] == 1){
					Session::setAdmin("adminlogin",true);
					Session::setAdmin("user_id",$value['user_id']);
					Session::setAdmin("user_code",$value['user_code']);
					Session::setAdmin("user_firstname",$value['user_firstname']);
					Session::setAdmin("user_lastname",$value['user_lastname']);
					Session::setAdmin("user_name",$value['user_name']);
					Session::setAdmin("user_role_id",$value['user_role_id']);
					Session::setAdmin("user_status",$value['user_status']);
				
					//Fixed Length & Large Random Numbers with PHP
					$loged_number = $this->fm->big_rand( 9 );
					
					//CURRENTLY LOGEDIN USERS
					$logged_code = $value['user_code'];
					$logged_firstname = $value['user_firstname'];
					$logged_lastname = $value['user_lastname'];
					$logged_username = $value['user_name'];
					$logged_role_id = $value['user_role_id'];
					
				
					$loged_in_query="INSERT INTO w3a_logged_in(logged_user_code,logged_firstname,logged_lastname,logged_username,logged_number,logged_role_id) VALUES('$logged_code','$logged_firstname','$logged_lastname','$logged_username','$loged_number','$logged_role_id')";
					$logininsert = $this->db->insert($loged_in_query);
					
					//USERS LOGIN HISTORY
					$login_history_code = $value['user_code'];
					$login_history_firstname = $value['user_firstname'];
					$login_history_lastname = $value['user_lastname'];
					$login_history_username = $value['user_name'];
					$login_history_role_id = $value['user_role_id'];
					
				
					$login_history_query="INSERT INTO w3a_login_history(login_history_user_code,login_history_firstname,login_history_lastname,login_history_username,login_history_number,login_history_role_id) VALUES('$login_history_code','$login_history_firstname','$login_history_lastname','$login_history_username','$loged_number','$login_history_role_id')";
					$loginhistoryinsert = $this->db->insert($login_history_query);
					
					header('Location:dashboard.php');
					}else{
						$loginmsg = "
							<div class='alert alert-danger text-center'>
								  <strong>Oh Oops!</strong> You are not a site administrator.
							</div>
						";
						return $loginmsg;
					}
				}
			}else{
				$loginmsg = "
					<div class='alert alert-danger text-center'>
					  <strong>Oh Oops!</strong> Username or password not matched.
					</div>
				";
			    return $loginmsg;
			}
		}
		
	}
	
}

?>

