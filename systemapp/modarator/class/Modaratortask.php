<?php
class Modaratortask{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	/*
	|--------------------------------------------------------------------------
	| ALL COMMON FUNCTIONS START HERE
	|--------------------------------------------------------------------------
	*/

	/*DEPARTMENT USER ROLE*/
	public function getUserRole(){
		$query = "SELECT * FROM w3a_roles";

		$result = $this->db->select($query);
		return $result;
	}

	/*GET ALL DOCTORS*/
	public function getDoctor(){
		$query = "SELECT w3a_doctors.doctor_id,w3a_doctors.doctor_firstname,w3a_doctors.doctor_lastname FROM w3a_doctors";

		$result = $this->db->select($query);
		return $result;
	}

	/*GET ALL DOCTORS*/
	public function getBloodGroup(){
		$query = "SELECT * FROM w3a_blood_groups";
		$result = $this->db->select($query);
		return $result;
	}

	/*
	|--------------------------------------------------------------------------
	| ALL FUNCTION BASED ON DEPARTMENT START HERE
	|--------------------------------------------------------------------------
	*/
	/*DEPARTMENT ADD*/
	public function addDepartment($data){
		
		$department_name = mysqli_real_escape_string($this->db->link,$data['department_name']);
		$department_code = mysqli_real_escape_string($this->db->link,$data['department_code']);
		$department_description = mysqli_real_escape_string($this->db->link,$data['department_description']);
		$department_status = mysqli_real_escape_string($this->db->link,$data['department_status']);
		
		$notpermited  = array("application/pdf","application/doc","application/docx","application/psd","application/ppt","application/pptx","application/xlsx");

		if($department_name == "" || $department_code == ""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! Department name or code can not be empty.</span>

				</div>
			';

		return $msg;

		}else{
			$query = "INSERT INTO w3a_departments

			(department_code,department_name,department_description,department_status)
			
			VALUES
			('$department_code','$department_name','$department_description','$department_status')";
			
			$deptadd = $this->db->insert($query);

				if($deptadd){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! new department added.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to add department!</span>

					</div>

				';

				  return $msg;

			}
		}
	}
	
	/*DEPARTMENT GET*/
	public function getDepartment(){
		$query = "SELECT * FROM w3a_departments";

		$result = $this->db->select($query);
		return $result;
	}
	
	/*DEPARTMENT DELETE*/
	public function deleteDepartment($department_code){
		$query = "DELETE FROM w3a_departments 
			WHERE department_code = '$department_code'
		";

		$deptdelete = $this->db->delete($query);
		if($deptdelete){
			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Department deleted successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to delete department!</span>

				</div>
			';
			return $msg;
		}
	}
	
	/*DEPARTMENT ACTIVE*/
	public function activeDepartment($department_code){
		$query = "UPDATE w3a_departments SET department_status = 1 WHERE department_code = '$department_code'";
		
		$deptactive = $this->db->update($query);
		
		if($deptactive){
			$msg = '
				<div class="alert alert-success" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Department activated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to activate department!</span>

				</div>
			';
			return $msg;
		}
	}
	
	/*DEPARTMENT DEACTIVE*/
	public function deactiveDepartment($department_code){
		$query = "UPDATE w3a_departments SET department_status = 0 WHERE department_code = '$department_code'";
		
		$deptdeactive = $this->db->update($query);
		
		if($deptdeactive){
			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Department deactivated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to deactivate department!</span>

				</div>
			';
			return $msg;
		}
	}
	
	/*
	|--------------------------------------------------------------------------
	| ALL FUNCTION BASED ON DOCTOR START HERE
	|--------------------------------------------------------------------------
	*/
	
	/*DOCTOR ADD*/
	public function addDoctor($data,$file){
		$doctor_firstname = mysqli_real_escape_string($this->db->link,$data['doctor_firstname']);
		$doctor_lastname = mysqli_real_escape_string($this->db->link,$data['doctor_lastname']);
		$doctor_email = mysqli_real_escape_string($this->db->link,$data['doctor_email']);
		$doctor_mobile = mysqli_real_escape_string($this->db->link,$data['doctor_mobile']);
		$doctor_username = mysqli_real_escape_string($this->db->link,$data['doctor_username']);
		$doctor_password = mysqli_real_escape_string($this->db->link,$data['doctor_password']);
		$doctor_designation = mysqli_real_escape_string($this->db->link,$data['doctor_designation']);
		$doctor_department_code = mysqli_real_escape_string($this->db->link,$data['doctor_department_code']);
		$doctor_specialist = mysqli_real_escape_string($this->db->link,$data['doctor_specialist']);
		$doctor_address = mysqli_real_escape_string($this->db->link,$data['doctor_address']);
		$doctor_education = mysqli_real_escape_string($this->db->link,$data['doctor_education']);
		$doctor_biography = mysqli_real_escape_string($this->db->link,$data['doctor_biography']);
		$doctor_dob = mysqli_real_escape_string($this->db->link,$data['doctor_dob']);
		$doctor_blood_group = mysqli_real_escape_string($this->db->link,$data['doctor_blood_group']);
		$doctor_gender = mysqli_real_escape_string($this->db->link,$data['doctor_gender']);
		$doctor_status = mysqli_real_escape_string($this->db->link,$data['doctor_status']);
		
		$doctor_img = $file['doctor_img']['name'];

		if($doctor_firstname == "" || $doctor_lastname == "" || $doctor_email == "" || $doctor_mobile == "" || $doctor_username == "" || $doctor_password == "" || $doctor_designation == "" || $doctor_department_code == ""|| $doctor_specialist == "" || $doctor_address == "" || $doctor_education == "" || $doctor_dob == "" || $doctor_blood_group == "" || $doctor_img ==""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! All fields are required.</span>

				</div>
			';

			return $msg;
		}
		$usernamequery = "SELECT * FROM w3a_doctors WHERE doctor_username = '$doctor_username' LIMIT 1";
		$usernamechk = $this->db->select($usernamequery);
		
		if($usernamechk != false){
			$msg =
					"
					<div class='alert alert-danger'>
						<h4 align='center'>Username already exist!</h4>
					</div>
					"
				;
			return $msg;
		}else{
			$doctor_password = md5($doctor_password);
			
			// IMAGE
			$file_name1 = $file['doctor_img']['name'];
			$file_size1 = $file['doctor_img']['size'];
			$file_temp1 = $file['doctor_img']['tmp_name'];
			$file_type1 = $file['doctor_img']['type'];
			$div1 = explode('.', $file_name1);
			$file_ext1 = strtolower(end($div1));
			$unique_image1 = 'doc_'.substr(md5(time()), 0, 10).'.'.$file_ext1;
			$uploaded_image1 = $unique_image1;

			move_uploaded_file($file_temp1, '../img/doc/'.$uploaded_image1);
			$query = "INSERT INTO w3a_doctors

			(doctor_firstname,doctor_lastname,doctor_email,doctor_mobile,doctor_username,doctor_password,doctor_designation,doctor_department_code,doctor_specialist,doctor_img,doctor_address,doctor_education,doctor_biography,doctor_dob,doctor_blood_group,doctor_gender,doctor_status)
			
			VALUES
			('$doctor_firstname','$doctor_lastname','$doctor_email','$doctor_mobile','$doctor_username','$doctor_password','$doctor_designation','$doctor_department_code','$doctor_specialist','$uploaded_image1','$doctor_address','$doctor_education','$doctor_biography','$doctor_dob','$doctor_blood_group','$doctor_gender','$doctor_status')";
			
			$docadd = $this->db->insert($query);

				if($docadd){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! new doctor added.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to add doctor!</span>

					</div>

				';

				  return $msg;

			}
			
		}
	}
	
	/*DOCTOR EDIT*/
	public function editDoctor($data){
		$doctor_id = mysqli_real_escape_string($this->db->link,$data['doctor_id']);
		$doctor_firstname = mysqli_real_escape_string($this->db->link,$data['doctor_firstname']);
		$doctor_lastname = mysqli_real_escape_string($this->db->link,$data['doctor_lastname']);
		$doctor_email = mysqli_real_escape_string($this->db->link,$data['doctor_email']);
		$doctor_mobile = mysqli_real_escape_string($this->db->link,$data['doctor_mobile']);
		$doctor_designation = mysqli_real_escape_string($this->db->link,$data['doctor_designation']);
		$doctor_department_code = mysqli_real_escape_string($this->db->link,$data['doctor_department_code']);
		$doctor_specialist = mysqli_real_escape_string($this->db->link,$data['doctor_specialist']);
		$doctor_address = mysqli_real_escape_string($this->db->link,$data['doctor_address']);
		$doctor_education = mysqli_real_escape_string($this->db->link,$data['doctor_education']);
		$doctor_biography = mysqli_real_escape_string($this->db->link,$data['doctor_biography']);
		$doctor_dob = mysqli_real_escape_string($this->db->link,$data['doctor_dob']);
		$doctor_blood_group = mysqli_real_escape_string($this->db->link,$data['doctor_blood_group']);
		$doctor_gender	 = mysqli_real_escape_string($this->db->link,$data['doctor_gender']);
		$doctor_status = mysqli_real_escape_string($this->db->link,$data['doctor_status']);
		
		
		if($doctor_id == "" || $doctor_firstname == "" || $doctor_lastname == "" || $doctor_email == "" || $doctor_mobile == "" || $doctor_designation == "" || $doctor_department_code == ""|| $doctor_specialist == "" || $doctor_address == "" || $doctor_education == "" || $doctor_biography == "" || $doctor_dob == "" || $doctor_blood_group == "" || $doctor_gender == "" || $doctor_status == ""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! All fields are required.</span>

				</div>
			';

			return $msg;
		}else{
			if($doctor_status == 0){
				$query = "UPDATE w3a_doctor_schedules SET schedule_status = 0 WHERE schedule_doctor_id = '$doctor_id'";
		
				$scheduledeactive = $this->db->update($query);
			}
			if($doctor_status == 1){
				$query = "UPDATE w3a_doctor_schedules SET schedule_status =1 WHERE schedule_doctor_id = '$doctor_id'";
		
				$scheduledeactive = $this->db->update($query);
			}
			$query = "UPDATE w3a_doctors SET
				doctor_firstname = '$doctor_firstname',
				doctor_lastname = '$doctor_lastname',	
				doctor_email = '$doctor_email',	
				doctor_mobile =	'$doctor_mobile',
				doctor_designation = '$doctor_designation',
				doctor_department_code= '$doctor_department_code',
				doctor_specialist =	'$doctor_specialist',
				doctor_address 	= '$doctor_address',
				doctor_education = '$doctor_education',
				doctor_biography = '$doctor_biography',
				doctor_dob = '$doctor_dob',
				doctor_blood_group = '$doctor_blood_group',
				doctor_gender = '$doctor_gender',
				doctor_status = '$doctor_status'
				WHERE doctor_id ='$doctor_id'
				";
			
			$docupdate = $this->db->update($query);

				if($docupdate){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! information updated.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to update information!</span>

					</div>

				';

				  return $msg;

			}
			
		}
	}
	
	/*DOCTOR GET*/
	public function getDoctorList(){
		$query = "
			SELECT w3a_doctors.*, w3a_departments.* FROM w3a_doctors
			INNER JOIN w3a_departments 
			ON w3a_doctors.doctor_department_code = w3a_departments.department_code
		";

		$result = $this->db->select($query);
		return $result;
	}
	
	/*DEPARTMENT GET*/
	public function getDoctorById($doctor_id){
		$query = "
			SELECT w3a_doctors.*, w3a_departments.* FROM w3a_doctors
			INNER JOIN w3a_departments 
			ON w3a_doctors.doctor_department_code = w3a_departments.department_code
			WHERE doctor_id = '$doctor_id'
		";

		$result = $this->db->select($query);
		return $result;
	}
	
	/*DOCTOR ACTIVE*/
	public function activeDoctor($doctor_id){
		$query = "UPDATE w3a_doctors SET doctor_status = 1 WHERE doctor_id = '$doctor_id'";
		
		$docdeactive = $this->db->update($query);
		
		if($docdeactive){
			$query = "UPDATE w3a_doctor_schedules SET schedule_status = 1 WHERE schedule_doctor_id = '$doctor_id'";
		
			$scheduledeactive = $this->db->update($query);

			$msg = '
				<div class="alert alert-success" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Doctor activated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to activate doctor!</span>

				</div>
			';
			return $msg;
		}
	}
	
	/*DOCTOR DEACTIVE*/
	public function deactiveDoctor($doctor_id){
		$query = "UPDATE w3a_doctors SET doctor_status = 0 WHERE doctor_id = '$doctor_id'";
		
		$docdeactive = $this->db->update($query);
		
		if($docdeactive){
			$query = "UPDATE w3a_doctor_schedules SET schedule_status = 0 WHERE schedule_doctor_id = '$doctor_id'";
		
			$scheduledeactive = $this->db->update($query);

			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Doctor deactivated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to deactivate doctor!</span>

				</div>
			';
			return $msg;
		}
	}
	
	
	/*DOCTOR DELETE*/
	public function deleteDoctor($doctor_id){
		$queryimg = "SELECT w3a_doctors.doctor_img 
					FROM w3a_doctors WHERE doctor_id = '$doctor_id'";
		
		$docimgselect = $this->db->select($queryimg)->fetch_assoc();
		
		$img = "img/doc/".$docimgselect['doctor_img'];
		
		if(file_exists($img)){
			unlink($img);
		}
		
		$query = "DELETE FROM w3a_doctors WHERE doctor_id = '$doctor_id'";
		
		$docdelete = $this->db->delete($query);
		
		if($docdelete){

			$queryscheduledelete = "DELETE FROM w3a_doctor_schedules WHERE schedule_doctor_id = '$doctor_id'";
		
			$scheduledelete = $this->db->delete($queryscheduledelete);
			
			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Doctor deleted successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to delete doctor!</span>

				</div>
			';
			return $msg;
		}
	}


	/*
	|--------------------------------------------------------------------------
	| ALL FUNCTION BASED ON EMPLOYEE START HERE
	|--------------------------------------------------------------------------
	*/
	
	/*EMPLOYEE ADD*/
	public function addEmployee($data,$file){
		$user_firstname = mysqli_real_escape_string($this->db->link,$data['user_firstname']);
		$user_lastname = mysqli_real_escape_string($this->db->link,$data['user_lastname']);
		$user_name = mysqli_real_escape_string($this->db->link,$data['user_name']);
		$user_password = mysqli_real_escape_string($this->db->link,$data['user_password']);
		$user_mobile = mysqli_real_escape_string($this->db->link,$data['user_mobile']);
		$user_role_id = mysqli_real_escape_string($this->db->link,$data['user_role_id']);
		$user_dob = mysqli_real_escape_string($this->db->link,$data['user_dob']);
		$user_blood_group = mysqli_real_escape_string($this->db->link,$data['user_blood_group']);
		$user_gender = mysqli_real_escape_string($this->db->link,$data['user_gender']);
		$user_status = mysqli_real_escape_string($this->db->link,$data['user_status']);
		$user_address = mysqli_real_escape_string($this->db->link,$data['user_address']);
		
		$user_image = $file['user_image']['name'];

		//USER CARD ID NUMBER GENERATE
		$user_code = $this->fm->big_rand(12);

		if($user_firstname == "" || $user_lastname == "" || $user_name == "" || $user_password == "" || $user_mobile == "" || $user_role_id == "" || $user_dob == "" || $user_blood_group == ""|| $user_gender == "" || $user_status == "" || $user_address="" || $user_image==""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! All fields are required.</span>

				</div>
			';

			return $msg;
		}

		if($user_role_id == "2"){
			$msg =
					"
					<div class='alert alert-danger'>
						<h4 align='center'>Doctor can only be added from doctor menu!</h4>
					</div>
					"
				;
			return $msg;
		}
		
		$usernamequery = "SELECT * FROM w3a_users WHERE user_name = '$user_name' LIMIT 1";
		$usernamechk = $this->db->select($usernamequery);
		
		if($usernamechk != false){
			$msg =
					"
					<div class='alert alert-danger'>
						<h4 align='center'>Username already exist!</h4>
					</div>
					"
				;
			return $msg;
		}else{
			$user_password = md5($user_password);


			// IMAGE

			$file_name1 = $file['user_image']['name'];
			$file_size1 = $file['user_image']['size'];
			$file_temp1 = $file['user_image']['tmp_name'];
			$file_type1 = $file['user_image']['type'];
			$div1 = explode('.', $file_name1);
			$file_ext1 = strtolower(end($div1));
			$unique_image1 = 'user_'.substr(md5(time()), 0, 10).'.'.$file_ext1;
			$uploaded_image1 = $unique_image1;
		
			
			move_uploaded_file($file_temp1, '../img/employee/'.$uploaded_image1);

			$query = "INSERT INTO w3a_users

			(user_code,user_firstname,user_lastname,user_name,user_password,user_role_id,user_mobile,user_status,user_gender,user_dob,user_blood_group,user_image,user_address)
			
			VALUES
			('$user_code','$user_firstname','$user_lastname','$user_name','$user_password','$user_role_id','$user_mobile','$user_status','$user_gender','$user_dob','$user_blood_group','$uploaded_image1','$user_address')";
			
			$employeeadd = $this->db->insert($query);

				if($employeeadd){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! new employee added.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to add employee!</span>

					</div>

				';

				  return $msg;

			}
			
		}
	}

	/*EMPLOYEE EDIT*/
	public function editEmployee($data){
		$user_id = mysqli_real_escape_string($this->db->link,$data['user_id']);
		$user_firstname = mysqli_real_escape_string($this->db->link,$data['user_firstname']);
		$user_lastname = mysqli_real_escape_string($this->db->link,$data['user_lastname']);
		$user_mobile = mysqli_real_escape_string($this->db->link,$data['user_mobile']);
		$user_role_id = mysqli_real_escape_string($this->db->link,$data['user_role_id']);
		$user_dob = mysqli_real_escape_string($this->db->link,$data['user_dob']);
		$user_blood_group = mysqli_real_escape_string($this->db->link,$data['user_blood_group']);
		$user_gender = mysqli_real_escape_string($this->db->link,$data['user_gender']);
		$user_status = mysqli_real_escape_string($this->db->link,$data['user_status']);
		$user_address = mysqli_real_escape_string($this->db->link,$data['user_address']);

		if($user_id =="" || $user_firstname == "" || $user_lastname == "" || $user_mobile == "" || $user_role_id == "" || $user_dob==""  || $user_blood_group==""  || $user_gender==""  || $user_status == ""  || $user_address==""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! All fields are required.</span>

				</div>
			';

			return $msg;
		}
		
		$userrolequery = "SELECT * FROM w3a_users WHERE user_id = '$user_id' LIMIT 1";
		$userrolechk = $this->db->select($userrolequery)->fetch_assoc();

		if($userrolechk['user_role_id'] == "2"  ||  $user_role_id == 2){
			$msg =
					"
					<div class='alert alert-danger'>
						<h4 align='center'  style='display:block;text-align:center;font-size: 20px;'>Doctors can only be added from doctors menu!</h4>
					</div>
					"
				;
			return $msg;
		}else{
			$query = "UPDATE w3a_users SET
				user_firstname = '$user_firstname',
				user_lastname = '$user_lastname',	
				user_mobile = '$user_mobile',	
				user_role_id =	'$user_role_id',
				user_status =	'$user_status',
				user_gender =	'$user_gender',
				user_dob =	'$user_dob',
				user_blood_group =	'$user_blood_group',
				user_address = '$user_address'
				WHERE user_id ='$user_id'
				";
			
			$userupdate = $this->db->update($query);

				if($userupdate){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! information updated.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to update information!</span>

					</div>

				';

				  return $msg;

			}
				
		}
			
	}

	/*EMPLOYEE GET*/
	public function getEmployeeList(){
		$query = "
			SELECT w3a_users.*, w3a_roles.* FROM w3a_users
			INNER JOIN w3a_roles 
			ON w3a_users.user_role_id = w3a_roles.role_id
		";

		$result = $this->db->select($query);
		return $result;
	}

	/*EMPLOYEE GET BY ID*/
	public function getEmployeeById($user_id){
		$query = "
			SELECT w3a_users.*, w3a_roles.* FROM w3a_users
			INNER JOIN w3a_roles 
			ON w3a_users.user_role_id = w3a_roles.role_id
			WHERE w3a_users.user_id = '$user_id'
		";

		$result = $this->db->select($query);
		return $result;
	}

	/*EMPLOYEE ACTIVE*/
	public function activeEmployee($user_id){
		$query = "UPDATE  w3a_users SET user_status = 1 WHERE user_id = '$user_id'";
		
		$employeeactive = $this->db->update($query);
		
		if($employeeactive){
			
			$msg = '
				<div class="alert alert-success" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Employee activated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to activate employee!</span>

				</div>
			';
			return $msg;
		}
	}
	
	/*EMPLOYEE DEACTIVE*/
	public function deactiveEmployee($user_id){
		$query = "UPDATE  w3a_users SET user_status = 0 WHERE user_id = '$user_id'";
		
		$employeedeactive = $this->db->update($query);
		
		if($employeedeactive){
			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Employee deactivated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to deactivate employee!</span>

				</div>
			';
			return $msg;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| ALL FUNCTION BASED ON SCHEDULE START HERE
	|--------------------------------------------------------------------------
	*/

	/*SCHEDULE ADD*/
	public function addSchedule($data){
		
		$schedule_doctor_id = mysqli_real_escape_string($this->db->link,$data['schedule_doctor_id']);
		$schedule_available_date = mysqli_real_escape_string($this->db->link,$data['schedule_available_date']);
		$schedule_starting_at = mysqli_real_escape_string($this->db->link,$data['schedule_starting_at']);
		$schedule_ending_at = mysqli_real_escape_string($this->db->link,$data['schedule_ending_at']);
		$schedule_per_patient_time = mysqli_real_escape_string($this->db->link,$data['schedule_per_patient_time']);
		$schedule_visibility = mysqli_real_escape_string($this->db->link,$data['schedule_visibility']);
		$schedule_max_patient = mysqli_real_escape_string($this->db->link,$data['schedule_max_patient']);
		$schedule_status = mysqli_real_escape_string($this->db->link,$data['schedule_status']);


		if($schedule_doctor_id == "" || $schedule_available_date == "" || $schedule_starting_at == "" || $schedule_ending_at == "" || $schedule_per_patient_time == "" || $schedule_visibility == "" || $schedule_max_patient == ""){

			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Warning! Fileds can not be empty.</span>

				</div>
			';

		return $msg;

		}else{
			$query = "INSERT INTO  w3a_doctor_schedules

			(schedule_doctor_id,schedule_available_date,schedule_starting_at,schedule_ending_at,schedule_per_patient_time,schedule_visibility,schedule_max_patient,schedule_status)
			
			VALUES
			('$schedule_doctor_id','$schedule_available_date','$schedule_starting_at','$schedule_ending_at','$schedule_per_patient_time','$schedule_visibility','$schedule_max_patient','$schedule_status')";
			
			$scheduleadd = $this->db->insert($query);

				if($scheduleadd){

					  $msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Success! new schedule added.</span>

					</div>
				';
				return $msg;
			}else{

				$msg = '

					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to add schedule!</span>

					</div>

				';

				  return $msg;

			}
		}
	}
	
	/*SCHEDULE GET*/
	public function getSchedule(){
		$query = "SELECT w3a_doctor_schedules.*,w3a_doctors.doctor_id,w3a_doctors.doctor_firstname,w3a_doctors.doctor_lastname,w3a_doctors.doctor_mobile,w3a_doctors.doctor_designation,w3a_doctors.doctor_department_code,w3a_doctors.doctor_specialist,w3a_doctors.doctor_img,w3a_doctors.doctor_education,w3a_doctors.doctor_gender,w3a_doctors.doctor_status,w3a_departments.*
			FROM w3a_doctor_schedules 
			INNER JOIN w3a_doctors ON w3a_doctor_schedules.schedule_doctor_id = w3a_doctors.doctor_id 
			INNER JOIN w3a_departments ON w3a_doctors.doctor_department_code = w3a_departments.department_code
		 ";

		$result = $this->db->select($query);
		return $result;
	}

	/*SCHEDULE ACTIVE*/
	public function activeSchedule($schedule_id){
		$query = "SELECT w3a_doctor_schedules.*,w3a_doctors.doctor_id,w3a_doctors.doctor_status
			FROM w3a_doctor_schedules 
			INNER JOIN w3a_doctors ON w3a_doctor_schedules.schedule_doctor_id = w3a_doctors.doctor_id
			WHERE w3a_doctor_schedules.schedule_id = '$schedule_id'
			";

		$checkdoctoractivestatus = $this->db->select($query)->fetch_assoc();
		if($checkdoctoractivestatus['doctor_status'] == 0){
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Oops! You can not activate schedule when doctor is deactivated!</span>
					
					<span class="slideInRight" style="display:block;text-align:center;font-size: 16px;"> Please activate doctor first</span>

				</div>
			';
			return $msg;
		}else{
			$query = "UPDATE w3a_doctor_schedules SET schedule_status = 1 WHERE schedule_id = '$schedule_id'";
		
			$scheduleactive = $this->db->update($query);
			
			if($scheduleactive){
				$msg = '
					<div class="alert alert-success" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Schedule activated successfully!</span>

					</div>
				';
				return $msg;
			}else{
				$msg = '
					<div class="alert alert-danger" style="margin-top:10px;">

						<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to activate schedule!</span>

					</div>
				';
				return $msg;
			}
		}
	}
	
	/*SCHEDULE DEACTIVE*/
	public function deactiveSchedule($schedule_id){
		$query = "UPDATE w3a_doctor_schedules SET schedule_status = 0 WHERE schedule_id = '$schedule_id'";
		
		$scheduledeactive = $this->db->update($query);
		
		if($scheduledeactive){
			$msg = '
				<div class="alert alert-warning" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Schedule deactivated successfully!</span>

				</div>
			';
			return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="margin-top:10px;">

					<span class="slideInRight" style="display:block;text-align:center;font-size: 20px;">Failed to deactivate schedule!</span>

				</div>
			';
			return $msg;
		}
	}
}
?>