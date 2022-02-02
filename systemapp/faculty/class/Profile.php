<?php
class Profile{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
		public function getProfileById( $id ){
			$query = "SELECT seu_faculty_profile.*, seu_registered_faculty.registered_faculty_id,seu_registered_faculty.registered_faculty_phone
				FROM seu_faculty_profile INNER JOIN seu_registered_faculty 
				ON seu_faculty_profile.seu_profile_user = seu_registered_faculty.registered_faculty_id
				WHERE seu_profile_user = '$id' LIMIT 1
			";
			
			$getdata = $this->db->select($query);
			
			return $getdata;
		}
		public function updateProfile($s_id, $data){
			
			$seu_profile_first_name = $this->fm->validation($data['first_name']);
			$seu_profile_last_name = $this->fm->validation($data['last_name']);
			$seu_profile_gender = $this->fm->validation($data['gender']);
			$seu_profile_email = $this->fm->validation($data['email']);
			$seu_profile_area = $this->fm->validation($data['area']);
			$seu_profile_blood_group = $this->fm->validation($data['blood_group']);
			$seu_profile_text = $this->fm->validation($data['text']);
			
			
		
			$seu_profile_first_name			= mysqli_real_escape_string($this->db->link,$seu_profile_first_name);
			$seu_profile_last_name		    = mysqli_real_escape_string($this->db->link,$seu_profile_last_name);
			$seu_profile_gender				= mysqli_real_escape_string($this->db->link,$seu_profile_gender);
			$seu_profile_email				= mysqli_real_escape_string($this->db->link,$seu_profile_email);
			$seu_profile_area 				= mysqli_real_escape_string($this->db->link,$seu_profile_area);
			$seu_profile_blood_group		= mysqli_real_escape_string($this->db->link,$seu_profile_blood_group);
			$seu_profile_text 				= mysqli_real_escape_string($this->db->link,$seu_profile_text);
		
			$seu_profile_user = $s_id;
			if(empty($seu_profile_first_name) || empty($seu_profile_last_name) || empty($seu_profile_gender) || empty($seu_profile_area) || empty($seu_profile_department) || empty($seu_profile_blood_group) || empty($seu_profile_text)){
			$msg = "
				<div class='alert alert-danger'>
					<h5 align='center'>All fields are required!</h5>
				</div>
			";
			return $msg;
			}
		
		
			$query = "UPDATE seu_faculty_profile
				SET
				
				seu_profile_user = '$seu_profile_user',
				seu_profile_first_name = '$seu_profile_first_name',
				seu_profile_last_name = '$seu_profile_last_name',
				seu_profile_gender = '$seu_profile_gender',
				seu_profile_email  = '$seu_profile_email',
				seu_profile_area = '$seu_profile_area',
				seu_profile_blood_group = '$seu_profile_blood_group',
				seu_profile_text = '$seu_profile_text'
				
				WHERE seu_profile_user = '$seu_profile_user'
				";
				$updatedata = $this->db->update($query);
				
			if($updatedata){
				$msg =
				"
					<div class='alert alert-success'>
						<h5 align='center'>Profile Update successfully!.</h5>
					</div>
				"
				;
					  return $msg;
			}
		}	
		
		public function createProfile($s_id, $data){
			
			$seu_profile_first_name = $this->fm->validation($data['first_name']);
			$seu_profile_last_name = $this->fm->validation($data['last_name']);
			$seu_profile_gender = $this->fm->validation($data['gender']);
			$seu_profile_email = $this->fm->validation($data['email']);
			$seu_profile_area = $this->fm->validation($data['area']);
			$seu_profile_blood_group = $this->fm->validation($data['blood_group']);
			$seu_profile_text = $this->fm->validation($data['text']);
			
			
		
			$seu_profile_first_name			= mysqli_real_escape_string($this->db->link,$seu_profile_first_name);
			$seu_profile_last_name		    = mysqli_real_escape_string($this->db->link,$seu_profile_last_name);
			$seu_profile_gender				= mysqli_real_escape_string($this->db->link,$seu_profile_gender);
			$seu_profile_email				= mysqli_real_escape_string($this->db->link,$seu_profile_email);
			$seu_profile_area 				= mysqli_real_escape_string($this->db->link,$seu_profile_area);
			$seu_profile_blood_group		= mysqli_real_escape_string($this->db->link,$seu_profile_blood_group);
			$seu_profile_text 				= mysqli_real_escape_string($this->db->link,$seu_profile_text);
		
			$seu_profile_user = $s_id;
			if(empty($seu_profile_first_name) || empty($seu_profile_last_name) || empty($seu_profile_gender) || empty($seu_profile_area) || empty($seu_profile_blood_group) || empty($seu_profile_text)){
			$msg = "
				<div class='alert alert-danger'>
					<h5 align='center'>All fields are required!</h5>
				</div>
			";
			return $msg;
			}
		
		
			$query = "INSERT INTO seu_faculty_profile 
			(seu_profile_user,seu_profile_first_name,seu_profile_last_name,seu_profile_gender,seu_profile_email,seu_profile_area,seu_profile_department,seu_profile_blood_group,seu_profile_text)
			VALUES
			('$seu_profile_user','$seu_profile_first_name','$seu_profile_last_name','$seu_profile_gender','$seu_profile_email','$seu_profile_area','$seu_profile_blood_group','$seu_profile_text')
			";
			
			$insertdata = $this->db->insert($query);
				
			if($insertdata){
				header("Location: http://localhost/project/roktokona/systemapp/faculty/profile.php");
			}else{
				$msg =
				"
					<div class='alert alert-success'>
						<h5 align='center'>Unable to create profile!.</h5>
					</div>
				"
				;
				  return $msg;
			}
		}

		public function updatePassword($s_id, $data){
			
			$old_password = $this->fm->validation($data['old_password']);
			$new_password = $this->fm->validation($data['new_password']);
			$confirm_password = $this->fm->validation($data['confirm_password']);
			
			
		
			$old_password			= mysqli_real_escape_string($this->db->link,$old_password);
			$new_password		    = mysqli_real_escape_string($this->db->link,$new_password);
			$confirm_password		= mysqli_real_escape_string($this->db->link,$confirm_password);
			
			$oldpassquery = "SELECT * FROM seu_registered_faculty WHERE registered_faculty_id = '$s_id' LIMIT 1";
			
			$oldpass = $this->db->select($oldpassquery)->fetch_assoc();
			
			if($oldpass != NULL){
				$oldpassword = $oldpass['registered_faculty_password'];
			}
			
			if($oldpassword != md5($old_password)){
				$msg =
				"
					<div class='alert alert-danger'>
						<h5 align='center'>Old password not matched!.</h5>
					</div>
				"
				;
				  return $msg;
			}else if(md5($new_password) != md5($confirm_password)){
				$msg =
				"
					<div class='alert alert-danger'>
						<h5 align='center'>Confirm password not matched!.</h5>
					</div>
				"
				;
				  return $msg;
			}else{
				$newpasswordmd5 = md5($confirm_password);
				$updatequery = "UPDATE seu_registered_faculty
					SET
					registered_faculty_password = '$newpasswordmd5'
					
					WHERE registered_faculty_id = '$s_id'
				";
				
				$updatepassdone = $this->db->update($updatequery);
				
				if($updatepassdone != NULL){
					$msg =
					"
						<div class='alert alert-success'>
							<h5 align='center'>Password updated successfully!.</h5>
						</div>
					"
					;
				  return $msg;
				}else{
					$msg =
					"
						<div class='alert alert-danger'>
							<h5 align='center'>Unable to update password!.</h5>
						</div>
					"
					;
				  return $msg;
				}
			}
		}
}