<?php
 
	include'core/Session.php';
	Session::checkLogin();
?>
<?php
class FacultyLogin{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function userLogin($data){
				
		$faculty_id = $this->fm->validation($data['faculty_id']);
		
		$faculty_department = $this->fm->validation($data['faculty_department']);
		
		$faculty_password = $this->fm->validation($data['faculty_password']);
		
		
		$faculty_id = mysqli_real_escape_string($this->db->link,$faculty_id);
		
		$faculty_department = mysqli_real_escape_string($this->db->link,$faculty_department);
						
		$faculty_password = mysqli_real_escape_string($this->db->link,$faculty_password);
		
		
		if(empty($faculty_id) || empty($faculty_department) || empty($faculty_password)){
			$loginmsg = "
				<div class='alert alert-danger'>
					<h5 style=\"font-size:15px\" align='center'>Username, Department or password can not be empty!</h5>
				</div>
			";
			return $loginmsg;
		}else {
			
			$faculty_password = md5($faculty_password);
			$getfacultyquery = "SELECT * FROM seu_faculty_data WHERE faculty_id = '$faculty_id' AND faculty_department = '$faculty_department' AND faculty_password = '$faculty_password'";
			$facultyresult = $this->db->select($getfacultyquery);
			if($facultyresult != false){
				
				$value = $facultyresult->fetch_assoc();
				
				if($value['faculty_status'] != 1){
					$loginmsg = "
					<div class='alert alert-danger'>
						<h5 align='center'>
							Account not activated!
						</h5>
					</div>
					";
					return $loginmsg;
				}else{
					
					Session::setUser("Userlogin",true);
					Session::setUser("userloged",'faculty');
					Session::setUser("faculty_id",$value['faculty_id']);
					Session::setUser("faculty_department",$value['faculty_department']);
					Session::setUser("faculty_status",$value['faculty_status']);
					
					header('Location:http://localhost/project/roktokona/home.php');
				}
			}else{
				$loginmsg = "
					<div class='alert alert-danger'>
						<h5 align='center'>
							Username, Department or password not matched!
						</h5>
					</div>
				";
				
				
			    return $loginmsg;
			}
		}
		
	}
	
}

?>

