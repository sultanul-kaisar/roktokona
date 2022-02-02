<?php
class Blood{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function requestBlood($data){
		
		$blood_request_patient_name = $this->fm->validation($data['name']);
		$blood_request_blood_group = $this->fm->validation($data['blood']);
		$blood_request_area = $this->fm->validation($data['area']);
		$blood_request_gender = $this->fm->validation($data['gender']);
		$blood_request_phone = $this->fm->validation($data['phone']);
		$blood_request_d_date = $this->fm->validation($data['date']);
		$blood_request_h_name = $this->fm->validation($data['h_name']);
		$blood_request_h_address = $this->fm->validation($data['h_address']);
		$blood_request_user = Session::getUser("registered_student_id");
		
		
		$blood_request_patient_name     = mysqli_real_escape_string($this->db->link,$blood_request_patient_name);
		$blood_request_blood_group     = mysqli_real_escape_string($this->db->link,$blood_request_blood_group);
		$blood_request_area     = mysqli_real_escape_string($this->db->link,$blood_request_area);
		$blood_request_gender     = mysqli_real_escape_string($this->db->link,$blood_request_gender);
		$blood_request_phone     = mysqli_real_escape_string($this->db->link,$blood_request_phone);
		$blood_request_d_date     = mysqli_real_escape_string($this->db->link,$blood_request_d_date);
		$blood_request_h_name     = mysqli_real_escape_string($this->db->link,$blood_request_h_name);
		$blood_request_h_address     = mysqli_real_escape_string($this->db->link,$blood_request_h_address);
		
		if(empty($blood_request_patient_name) || empty($blood_request_blood_group) || empty($blood_request_area) || empty($blood_request_gender) || empty($blood_request_phone) || empty($blood_request_d_date) || empty($blood_request_h_name) || empty($blood_request_h_address)){
			$msg = "
				<div class='alert alert-danger'>
					<h5 align='center'>All fields are required!</h5>
				</div>
			";
			return $msg;
		}
		
		if((preg_match("/[a-zA-Z\'\\\\\/^£$%&*()}{!@#~?><>,|=_+¬]/", $blood_request_phone))){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Special characters are not allowed at contact number!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		$query = "INSERT INTO seu_blood_request
			(blood_request_user,blood_request_patient_name,blood_request_blood_group,blood_request_area,blood_request_gender,blood_request_phone,blood_request_d_date,blood_request_h_name,blood_request_h_address)
			VALUES
			('$blood_request_user','$blood_request_patient_name','$blood_request_blood_group','$blood_request_area','$blood_request_gender','$blood_request_phone','$blood_request_d_date','$blood_request_h_name','$blood_request_h_address')";

			$requestinsert = $this->db->insert($query);
			
		if($query){
			$msg =
			"
				<div class='alert alert-success'>
					<h5 align='center'>Request sent successfully!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
	}
	
	
	public function requestBloodByID($data){
		
		$user_id = $this->fm->validation($data['user_id']);
		$blood_request_patient_name = $this->fm->validation($data['name']);
		//$blood_request_blood_group = $this->fm->validation($data['blood']);
		$blood_request_area = $this->fm->validation($data['area']);
		$blood_request_gender = $this->fm->validation($data['gender']);
		$blood_request_phone = $this->fm->validation($data['phone']);
		$blood_request_d_date = $this->fm->validation($data['date']);
		$blood_request_h_name = $this->fm->validation($data['h_name']);
		$blood_request_h_address = $this->fm->validation($data['h_address']);
		$blood_request_user = Session::getUser("registered_student_id");
		
		
		$user_id     = mysqli_real_escape_string($this->db->link,$user_id);
		$blood_request_patient_name     = mysqli_real_escape_string($this->db->link,$blood_request_patient_name);
		//$blood_request_blood_group     = mysqli_real_escape_string($this->db->link,$blood_request_blood_group);
		$blood_request_area     = mysqli_real_escape_string($this->db->link,$blood_request_area);
		$blood_request_gender     = mysqli_real_escape_string($this->db->link,$blood_request_gender);
		$blood_request_phone     = mysqli_real_escape_string($this->db->link,$blood_request_phone);
		$blood_request_d_date     = mysqli_real_escape_string($this->db->link,$blood_request_d_date);
		$blood_request_h_name     = mysqli_real_escape_string($this->db->link,$blood_request_h_name);
		$blood_request_h_address     = mysqli_real_escape_string($this->db->link,$blood_request_h_address);
		
		if(empty($blood_request_patient_name) || empty($blood_request_area) || empty($blood_request_gender) || empty($blood_request_phone) || empty($blood_request_d_date) || empty($blood_request_h_name) || empty($blood_request_h_address)){
			$msg = "
				<div class='alert alert-danger'>
					<h5 align='center'>All fields are required!</h5>
				</div>
			";
			return $msg;
		}
		
		if((preg_match("/[a-zA-Z\'\\\\\/^£$%&*()}{!@#~?><>,|=_+¬]/", $blood_request_phone))){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Special characters are not allowed at contact number!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		$querygetuser = "SELECT seu_student_profile.*,
			seu_registered_student.registered_student_id,
			seu_registered_student.registered_student_phone 
			FROM seu_student_profile 
			INNER JOIN seu_registered_student ON seu_registered_student.registered_student_id = seu_student_profile.seu_profile_user
			WHERE seu_student_profile.seu_profile_user = '$user_id'
			
			";
			
			$getuserresult = $this->db->select($querygetuser);
			
			if($getuserresult != NULL){
				$rowuser = $getuserresult->fetch_assoc();
				
				$phone = $rowuser['registered_student_phone'];
				$name = $rowuser['seu_profile_first_name'].' '.$rowuser['seu_profile_last_name'];
				$blood_request_blood_group = $rowuser['seu_profile_blood_group'];
			}
			
			
		$query = "INSERT INTO seu_blood_request
			(blood_request_user,blood_request_to,blood_request_patient_name,blood_request_blood_group,blood_request_area,blood_request_gender,blood_request_phone,blood_request_d_date,blood_request_h_name,blood_request_h_address)
			VALUES
			('$blood_request_user','$user_id','$blood_request_patient_name','$blood_request_blood_group','$blood_request_area','$blood_request_gender','$blood_request_phone','$blood_request_d_date','$blood_request_h_name','$blood_request_h_address')";

			$requestinsert = $this->db->insert($query);
			
		if($query){
			
			$token = "995664bfc3d6e1f4e5eb52ca67250bb2";
			$message = "Dear $name You have a blood request for $blood_request_patient_name.
			Please contact to $blood_request_phone for details.
			SMS FROM www.oktokona.com
			";

			$url = "http://api.greenweb.com.bd/api.php";


			$data= array(
			'to'=>"$phone",
			'message'=>"$message",
			'token'=>"$token"
			); // Add parameters in key value
			$ch = curl_init(); // Initialize cURL
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_ENCODING, '');
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
			$smsresult = curl_exec($ch);

			$msg =
			"
				<div class='alert alert-success'>
					<h5 align='center'>Request sent successfully!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
	}
	
	public function getDonorBydept($dept){
		$query = "SELECT seu_student_profile.*,
			seu_registered_student.registered_student_id,
			seu_registered_student.registered_student_phone 
			FROM seu_student_profile 
			INNER JOIN seu_registered_student ON seu_registered_student.registered_student_id = seu_student_profile.seu_profile_user
			WHERE seu_student_profile.seu_profile_department = '$dept'
			
		";
		
		$result = $this->db->select($query);
		
		return $result;
	}
	
}