<?php
	include'core/Session.php';
	
	Session::checkModaratorLogin();

	include 'core/Database.php';
	include'core/Format.php';
?>

<?php
class Modaratorlogin{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function modaratorLogin($modarator_username,$modarator_password){
		
		$modarator_username = $this->fm->validation($modarator_username);
		
		$modarator_password = $this->fm->validation($modarator_password);
		
		$modarator_username = mysqli_real_escape_string($this->db->link,$modarator_username);
		
		$modarator_password = mysqli_real_escape_string($this->db->link,$modarator_password);
		
		if(empty($modarator_username) || empty($modarator_password)){
			$loginmsg = "
				<div class='alert alert-danger text-center'>
					  <strong>Oh opps!</strong> Username or password can not be empty.
				</div>
			";
			return $loginmsg;
		}else {
			$query = "SELECT * FROM w3a_users WHERE user_name = '$modarator_username' AND user_password = '$modarator_password'";
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
					Session::setModarator("modaratorlogin",true);
					Session::setModarator("user_id",$value['user_id']);
					Session::setModarator("user_code",$value['user_code']);
					Session::setModarator("user_firstname",$value['user_firstname']);
					Session::setModarator("user_lastname",$value['user_lastname']);
					Session::setModarator("user_name",$value['user_name']);
					Session::setModarator("user_role_id",$value['user_role_id']);
					Session::setModarator("user_status",$value['user_status']);
				
					//Fixed Length & Large Random Numbers with PHP
					$loged_number = $this->fm->big_rand( 9 );
					
					//CURRENTLY LOGEDIN USERS
					$logged_code = $value['user_code'];
					$logged_firstname = $value['user_firstname'];
					$logged_lastname = $value['user_lastname'];
					$logged_username = $value['user_name'];
					$logged_role_id = $value['user_role_id'];
					
				
					$loged_in_query="INSERT INTO seu_roktokona_logged_in(logged_user_code,logged_firstname,logged_lastname,logged_username,logged_number,logged_role_id) VALUES('$logged_code','$logged_firstname','$logged_lastname','$logged_username','$loged_number','$logged_role_id')";
					$logininsert = $this->db->insert($loged_in_query);
					
					//USERS LOGIN HISTORY
					$login_history_code = $value['user_code'];
					$login_history_firstname = $value['user_firstname'];
					$login_history_lastname = $value['user_lastname'];
					$login_history_username = $value['user_name'];
					$login_history_role_id = $value['user_role_id'];
					
				
					$login_history_query="INSERT INTO seu_roktokona_login_history(login_history_user_code,login_history_firstname,login_history_lastname,login_history_username,login_history_number,login_history_role_id) VALUES('$login_history_code','$login_history_firstname','$login_history_lastname','$login_history_username','$loged_number','$login_history_role_id')";
					$loginhistoryinsert = $this->db->insert($login_history_query);
					
					header('Location:dashboard.php');
					}else{
						$loginmsg = "
							<div class='alert alert-danger text-center'>
								  <strong>Oh Oops!</strong> You are not a site modarator.
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

