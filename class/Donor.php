<?php
 class Donor{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
	//DONOR DONATION HISTORY INSERT
	public function donationHistory($data){
		$donation_donar_id = $this->fm->validation($data['donation_donar_id']);
		$donation_date = $this->fm->validation($data['donation_date']);
		$donation_place = $this->fm->validation($data['donation_place']);
		
		$donation_donar_id     = mysqli_real_escape_string($this->db->link,$donation_donar_id);
		$donation_date    = mysqli_real_escape_string($this->db->link,$donation_date);
		$donation_place    = mysqli_real_escape_string($this->db->link,$donation_place);
		
		if($donation_date == "" || $donation_place == ""){
			$msg = '
					<div class="alert alert-danger" style="text-align:center; margin-top:20px;">
						<h4 align="center" style="font-size:20px;">All fields are required.</h4>
					</div>
				  ';
				  return $msg;
		}
		
		if((preg_match('/[`\'\\\\^£$%&*()}{!@#~?><>,|=_+¬]/', $donation_place))){
			$msg =
			"
				<div class='alert alert-danger' style='margin-top:20px;'>
					<h4 align='center'>Special characters are not allowed!.</h4>
				</div>
			"
			;
			return $msg;
		}
		if(preg_match("/[a-zA-Z\'^£$%&*()}{!@#~?><>,|=_+¬]/",$donation_date)){
			$msg =
			"
				<div class='alert alert-danger' style='margin-top:20px;'>
					<h4 align='center'>Donation date formate not correct!</h4>
				</div>
			"
			;
				  return $msg;
		}
		
		$donation_donar_id = Session::getUser('registered_student_id');
		
		$query = "INSERT INTO seu_donation
		(donation_user_id,donation_date,donation_place)
		VALUES
		('$donation_donar_id','$donation_date','$donation_place')";
		$donationhistory = $this->db->insert($query);
		
		if($donationhistory){
			  $query1 = "SELECT *FROM seu_donation_history_count 
			  WHERE history_count_user_id = '$donation_donar_id'";
				$donationhistorycountcheck = $this->db->select($query1);
				
				if($donationhistorycountcheck != NULL){
					$countrow = $donationhistorycountcheck->fetch_assoc();
					$history_count_total = $countrow['history_count_total'];
					$query2 = "UPDATE seu_donation_history_count SET
						history_count_total = '$history_count_total'+1
						WHERE history_count_user_id = '$donation_donar_id'
					";
					$donationhistorycountupdate = $this->db->update($query2);
				}else{
					$history_count_total = 1;
					$query3 = "INSERT INTO seu_donation_history_count
					(history_count_user_id,history_count_total)
					VALUES
					('$donation_donar_id','$history_count_total')";
					$donationhistorycountset = $this->db->insert($query3);
				}
			
			  $msg = '
				<div class="alert alert-success" style="text-align:center; margin-top:20px;">
					<h4 align="center">Your history added successfully.</h4>
				</div>
			  ';
			  return $msg;
		}else{
			$msg = '
				<div class="alert alert-danger" style="text-align:center; margin-top:20px;">
					<h4>Failed to add history.</h4>
				</div>
				';
			return $msg;
		}
	}
	
	public function GetLastDonationHistory($user_id){
	  $query = "SELECT * FROM seu_donation where donation_user_id ='$user_id'
		ORDER BY donation_date DESC LIMIT 1
	  ";
		$result = $this->db->select($query);
		return $result;
	}
	
 }