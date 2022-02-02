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
	
}