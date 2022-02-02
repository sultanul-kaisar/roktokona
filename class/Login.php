<?php
 
	include'core/Session.php';
	
	Session::checkLogin();

	include 'core/Database.php';
	include'core/Format.php';
?>

<?php
class Login{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function userLogin($registered_student_id,$registered_student_password){
		
		$registered_student_id = $this->fm->validation($registered_student_id);
		
		$registered_student_password = $this->fm->validation($registered_student_password);
		
		$registered_student_id = mysqli_real_escape_string($this->db->link,$registered_student_id);
		
		$registered_student_password = mysqli_real_escape_string($this->db->link,$registered_student_password);
		
		if(empty($registered_student_id) || empty($registered_student_password)){
			$loginmsg = "
				<div class='alert alert-danger'>
					<h5 align='center'>Username or password can not be empty!</h5>
				</div>
			";
			return $loginmsg;
		}else {
			$getstudentquery = "SELECT * FROM seu_registered_student WHERE registered_student_id = '$registered_student_id' AND registered_student_password = '$registered_student_password'";
			$studentresult = $this->db->select($getstudentquery);
			if($studentresult != false){
				
				$value = $studentresult->fetch_assoc();
				
				if($value['registered_student_status'] != 1){
					$loginmsg = "
					<div class='alert alert-danger'>
						<h5 align='center'>
							Account not activated!
						</h5>
					</div>
					";
					return $loginmsg;
				}else{
					
				}
				
				Session::setUser("Userlogin",true);
				Session::setUser("registered_student_id",$value['registered_student_id']);
				Session::setUser("userloged",'student');
				Session::setUser("registered_student_phone",$value['registered_student_phone']);
				Session::setUser("registered_student_status",$value['registered_student_status']);
				Session::setUser("registered_at",$value['registered_at']);
				
				header('Location:home.php');
			}else{
				$loginmsg = "
					<div class='alert alert-danger'>
						<h5 align='center'>
							Username or password not matched!
						</h5>
					</div>
				";
				
				
			    return $loginmsg;
			}
		}
		
	}
	
}

?>

