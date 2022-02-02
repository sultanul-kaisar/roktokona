<?php
class Registration{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	public function searchStudent($data){
		$student_id = $this->fm->validation($data['student_id']);
		$student_id     = mysqli_real_escape_string($this->db->link,$student_id);
		
		if($student_id == ""){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Please enter your student ID!</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		if((preg_match("/[a-zA-Z\'\\\\\/^£$%&*()}{!@#~?><>,|=_+¬]/", $student_id))){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Special characters are not allowed!</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		if((strlen($student_id) >13) || (strlen($student_id) <13)){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Student ID must be 13 digits long!</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		$querysearchstudent = "SELECT * FROM seu_student_data WHERE student_id = '$student_id'";
		
		$resultsearchstudent = $this->db->select($querysearchstudent);
		
		if($resultsearchstudent != false){
			$querysearchstudent2 = "SELECT * FROM seu_registered_student WHERE registered_student_id = '$student_id'";
		
		    $resultsearchstudent2 = $this->db->select($querysearchstudent2);
			
				if($resultsearchstudent2){
					$msg =
					"
						<div class='alert alert-danger'>
							<h5 align='center'>Student ID already registered!</h5>
						</div>
					"
					;
						  return $msg;
				}else{
					
					$string = $this->fm->random_alphanumeric_string(6,2);
				
					$string2 = $string.$student_id;
					
					$shuffledstring = str_shuffle($string2);
					$registration_hash = sha1($shuffledstring);
					
					$selectprehash = "SELECT * FROM seu_student_registration_hash WHERE registration_hash_student_id ='$student_id'";
					
					$getprehash = $this->db->select($selectprehash);
					
					if($getprehash != false){
						$deleteprehash = "DELETE FROM seu_student_registration_hash WHERE registration_hash_student_id ='$student_id'";
						$executedeleteprehash = $this->db->delete($deleteprehash);
					}
					
					$recoverquery = "INSERT INTO seu_student_registration_hash
					(registration_hash_student_id,registration_hash_code)
					VALUES
					('$student_id','$registration_hash')";

					$recoverinsert = $this->db->insert($recoverquery);
						
					if($recoverinsert){
						header("Location:registration.php?initiate=$student_id&data=$registration_hash");
					}
				}
		
		}else{
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Student ID not found on our database!</h5>
				</div>
			"
			;
				  return $msg;
		}
	}
	
	public function getValidRegistrationRequest($initiate,$data){
		$initiate = $this->fm->validation($initiate);
		$data = $this->fm->validation($data);
		
		$initiate     = mysqli_real_escape_string($this->db->link,$initiate);
		$data     = mysqli_real_escape_string($this->db->link,$data);
		
		$getuserquery = "SELECT * FROM seu_student_registration_hash
			WHERE registration_hash_student_id = '$initiate' && registration_hash_code = '$data'
		";
		
		$result = $this->db->select($getuserquery);
		return $result;
	}

	public function registerStudent($initiate,$data){
		$initiate = $this->fm->validation($initiate);
		
		$registered_student_phone = $this->fm->validation($data['registered_student_phone']);
		$registered_student_password = $this->fm->validation($data['registered_student_password']);
		$registered_student_password_confirm = $this->fm->validation($data['registered_student_password_confirm']);
		
		
		$registered_student_phone     = mysqli_real_escape_string($this->db->link,$registered_student_phone);
		$registered_student_password     	  = mysqli_real_escape_string($this->db->link,md5($registered_student_password));
		$registered_student_password_confirm        = mysqli_real_escape_string($this->db->link,md5($registered_student_password_confirm));
		
		if($registered_student_phone == "" || $registered_student_password == "" || $registered_student_password_confirm == ""){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Fields can not be empty.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		if((preg_match("/[a-zA-Z\'\\\\\/^£$%&*()}{!@#~?><>,|=_+¬]/", $registered_student_phone))){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Special characters are not allowed!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		if($registered_student_password != $registered_student_password_confirm){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Confirm password does not match.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		$phonequery = "SELECT * FROM seu_registered_student WHERE registered_student_phone = '$registered_student_phone' LIMIT 1";
		$phonechk = $this->db->select($phonequery);

		if($phonechk != false){
			$msg =
					"
					<div class='alert alert-danger'>
						<h5 align='center'>Phone number already registered.</h5>
					</div>
					"
				;
			return $msg;
		}else{
			$query = "INSERT INTO seu_registered_student
			(registered_student_id,registered_student_password,registered_student_phone)
			VALUES
			('$initiate','$registered_student_password','$registered_student_phone')";

			$studentinsert = $this->db->insert($query);
			
			if($studentinsert){
				  $verification_code = rand(1111,9999);
				 
				  $verificationquery = "INSERT INTO seu_student_registration_verification
								(registration_verification_student_id,registration_verification_stuednt_phone,registration_verification_code)
								VALUES
								('$initiate','$registered_student_phone','$verification_code')
								";

				$verificationinsert = $this->db->insert($verificationquery);
				  
				if($verificationinsert){
					$selectprehash = "SELECT * FROM seu_student_registration_hash WHERE registration_hash_student_id ='$initiate'";
				
					$getprehash = $this->db->select($selectprehash);
				
					if($getprehash != false){
						$deleteprehash = "DELETE FROM seu_student_registration_hash WHERE registration_hash_student_id ='$initiate'";
						$executedeleteprehash = $this->db->delete($deleteprehash);
					}
					
					$to = $registered_student_phone;
					$token = "ed5bb6d2b58af74e649066edf91d4630";
					$message = "Your activation code for RoktoKona account is : $verification_code";

					$url = "http://sms.greenweb.com.bd/api.php";


					$data= array(
					'to'=>"$to",
					'message'=>"$message",
					'token'=>"$token"
					); // Add parameters in key value
					$ch = curl_init(); // Initialize cURL
					curl_setopt($ch, CURLOPT_URL,$url);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$smsresult = curl_exec($ch);
					header("Location:active_account.php?initiate=$initiate&phone=$registered_student_phone");
				}
			}else{
				$msg =
					"
					<div class='alert alert-danger'>
						<h5 align='center'>Field to register!!!.</h5>
					</div>
					"
				;
				  return $msg;
			}
		}
	}
	
	public function getValidVerificationRequest($initiate,$phone){
		$initiate = $this->fm->validation($initiate);
		$phone = $this->fm->validation($phone);
		
		$initiate     = mysqli_real_escape_string($this->db->link,$initiate);
		$phone     = mysqli_real_escape_string($this->db->link,$phone);
		
		$getuserquery = "SELECT * FROM seu_student_registration_verification
			WHERE registration_verification_student_id = '$initiate' && registration_verification_stuednt_phone = '$phone'
		";
		
		$result = $this->db->select($getuserquery);
		return $result;
	}
	
	public function activateStudent($initiate,$phone,$data){
		
		$initiate = $this->fm->validation($initiate);
		$phone = $this->fm->validation($phone);
		
		$registration_verification_code = $this->fm->validation($data['registration_verification_code']);
		
		$initiate     = mysqli_real_escape_string($this->db->link,$initiate);
		$phone     = mysqli_real_escape_string($this->db->link,$phone);
		$registration_verification_code     = mysqli_real_escape_string($this->db->link,$registration_verification_code);
		
		
		if($registration_verification_code == ""){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Activation code can not be empty.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		if((preg_match("/[a-zA-Z\'\\\\\/^£$%&*()}{!@#~?><>,|=_+¬]/", $registration_verification_code))){
			$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Special characters are not allowed!.</h5>
				</div>
			"
			;
				  return $msg;
		}
		
		$getcodequery = "SELECT * FROM seu_student_registration_verification
			WHERE registration_verification_student_id = '$initiate' && registration_verification_stuednt_phone = '$phone'
		";
		
		$result = $this->db->select($getcodequery);
		
		if($result != NULL){
			$getresult = $result->fetch_assoc();
			
			if($registration_verification_code != $getresult['registration_verification_code']){
				$msg =
			"
				<div class='alert alert-danger'>
					<h5 align='center'>Please enter valid verification code!</h5>
				</div>
			"
			;
				  return $msg;
			}else{
				$updatestudentstatus = "
				UPDATE seu_registered_student SET
				registered_student_status = '1'
				WHERE registered_student_id = '$initiate'  AND registered_student_phone = '$phone'
				";
				
				$updatenow = $this->db->update($updatestudentstatus);
				
				if($updatenow){
					$deleteverification = "
				DELETE FROM seu_student_registration_verification 
				WHERE registration_verification_student_id = '$initiate'  AND registration_verification_stuednt_phone = '$phone'
				";
				
				$deletenow = $this->db->delete($deleteverification);
				
					$to = $phone;
					$token = "ed5bb6d2b58af74e649066edf91d4630";
					$message = "RoktoKona account for student ID : $initiate has been activated successfully.";

					$url = "http://sms.greenweb.com.bd/api.php";


					$data= array(
					'to'=>"$to",
					'message'=>"$message",
					'token'=>"$token"
					); // Add parameters in key value
					$ch = curl_init(); // Initialize cURL
					curl_setopt($ch, CURLOPT_URL,$url);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$smsresult = curl_exec($ch);
					
					header("Location:index.php");
				}
			}
		}
		
		
	}
}

?>

