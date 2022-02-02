<?php
// include composer autoload
require 'vendor/autoload.php';
use Intervention\Image\ImageManager;
use Intervention\Image\Image;

class Profile{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	
		public function getProfileById( $id ){
			$query = "SELECT seu_student_profile.*, seu_registered_student.registered_student_id,seu_registered_student.registered_student_phone
				FROM seu_student_profile INNER JOIN seu_registered_student 
				ON seu_student_profile.seu_profile_user = seu_registered_student.registered_student_id
				WHERE seu_profile_user = '$id' LIMIT 1
			";
			
			$getdata = $this->db->select($query);
			
			return $getdata;
		}
		
		public function getProfileImage($s_id){
			$imagequery = "SELECT * FROM seu_profile_image 
				where profile_image_user_id = '$s_id'
				";
				
			$getimage = $this->db->select($imagequery);
			
			return $getimage;
		}
		
		public function updateProfileImage($s_id, $file){
			ini_set('memory_limit', '256M');
			// create an image manager instance with favored driver
			$manager = new ImageManager(array('driver' => 'gd'));
			
			$s_id     = mysqli_real_escape_string($this->db->link,$s_id);
			
			$file_temp = $file['useravatar']['tmp_name'];
			//$file_size = $file['useravatar']['size'];
			
			//$imgsize = Image::make($file_temp)->filesize();
			//echo $file_size;
			//exit();
			if($file_temp == ''){

				$msg = '
					<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
						<strong>Error!</strong> Please enter image for Profile.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
				  ';
				return $msg;

			}
			
			$mime = $manager->make($file_temp)->mime();

			if($mime == 'image/png' || $mime == 'image/jpg' || $mime == 'image/jpeg'){
				
				
				$imagequery = "SELECT * FROM seu_profile_image 
				where profile_image_user_id = '$s_id'
				";
				
				$getimage = $this->db->select($imagequery);
				
				if($getimage != NULL){
					$imgname = $s_id.'.jpg';
					$img = $manager->make($file_temp)->resize(80, 80);
					if (file_exists('assets/img/author/'.$imgname)) {
						unlink('assets/img/author/'.$imgname);
					}

					$img->save('assets/img/author/'.$imgname);

					$msg = '
						<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
							<strong>Success!</strong> Logo updated successfully.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
					  ';
					return $msg;
				}else{
					$imgname = $s_id.'.jpg';
					$imageinsertquery = "INSERT INTO seu_profile_image
						(profile_image_user_id,profile_image) 
						VALUES('$s_id','$imgname')
					";
					
					$insertimage = $this->db->insert($imageinsertquery);
					
					if($insertimage){
						$imgname = $s_id.'.jpg';
						$img = $manager->make($file_temp)->resize(80, 80);
						if (file_exists('assets/img/author/'.$imgname)) {
							unlink('assets/img/author/'.$imgname);
						}

						$img->save('assets/img/author/'.$imgname);

						$msg = '
							<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
								<strong>Success!</strong> Logo updated successfully.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						  ';
						return $msg;
					}
				}
			}else{
				$msg = '
					<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
						<strong>Warning!</strong> Only PNG / JPG / JPEG image type supported.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
				  ';
				return $msg;
			}
		}
		public function updateProfile($s_id, $data){
			
			$seu_profile_first_name = $this->fm->validation($data['first_name']);
			$seu_profile_last_name = $this->fm->validation($data['last_name']);
			$seu_profile_gender = $this->fm->validation($data['gender']);
			$seu_profile_email = $this->fm->validation($data['email']);
			$seu_profile_area = $this->fm->validation($data['area']);
			$seu_profile_department = $this->fm->validation($data['department']);
			$seu_profile_blood_group = $this->fm->validation($data['blood_group']);
			$seu_profile_text = $this->fm->validation($data['text']);
			
			
		
			$seu_profile_first_name			= mysqli_real_escape_string($this->db->link,$seu_profile_first_name);
			$seu_profile_last_name		    = mysqli_real_escape_string($this->db->link,$seu_profile_last_name);
			$seu_profile_gender				= mysqli_real_escape_string($this->db->link,$seu_profile_gender);
			$seu_profile_email				= mysqli_real_escape_string($this->db->link,$seu_profile_email);
			$seu_profile_area 				= mysqli_real_escape_string($this->db->link,$seu_profile_area);
			$seu_profile_department			= mysqli_real_escape_string($this->db->link,$seu_profile_department);
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
		
		
			$query = "UPDATE seu_student_profile
				SET
				
				seu_profile_user = '$seu_profile_user',
				seu_profile_first_name = '$seu_profile_first_name',
				seu_profile_last_name = '$seu_profile_last_name',
				seu_profile_gender = '$seu_profile_gender',
				seu_profile_email  = '$seu_profile_email',
				seu_profile_area = '$seu_profile_area',
				seu_profile_department = '$seu_profile_department',
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
			$seu_profile_department = $this->fm->validation($data['department']);
			$seu_profile_blood_group = $this->fm->validation($data['blood_group']);
			$seu_profile_text = $this->fm->validation($data['text']);
			
			
		
			$seu_profile_first_name			= mysqli_real_escape_string($this->db->link,$seu_profile_first_name);
			$seu_profile_last_name		    = mysqli_real_escape_string($this->db->link,$seu_profile_last_name);
			$seu_profile_gender				= mysqli_real_escape_string($this->db->link,$seu_profile_gender);
			$seu_profile_email				= mysqli_real_escape_string($this->db->link,$seu_profile_email);
			$seu_profile_area 				= mysqli_real_escape_string($this->db->link,$seu_profile_area);
			$seu_profile_department			= mysqli_real_escape_string($this->db->link,$seu_profile_department);
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
		
		
			$query = "INSERT INTO seu_student_profile 
			(seu_profile_user,seu_profile_first_name,seu_profile_last_name,seu_profile_gender,seu_profile_email,seu_profile_area,seu_profile_department,seu_profile_blood_group,seu_profile_text)
			VALUES
			('$seu_profile_user','$seu_profile_first_name','$seu_profile_last_name','$seu_profile_gender','$seu_profile_email','$seu_profile_area','$seu_profile_department','$seu_profile_blood_group','$seu_profile_text')
			";
			
			$insertdata = $this->db->insert($query);
				
			if($insertdata){
				header("Location: profile.php");
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
			
			$oldpassquery = "SELECT * FROM seu_registered_student WHERE registered_student_id = '$s_id' LIMIT 1";
			
			$oldpass = $this->db->select($oldpassquery)->fetch_assoc();
			
			if($oldpass != NULL){
				$oldpassword = $oldpass['registered_student_password'];
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
				$updatequery = "UPDATE seu_registered_student
					SET
					registered_student_password = '$newpasswordmd5'
					
					WHERE registered_student_id = '$s_id'
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
		
		public function myDonations($user_id){
			$query = "Select * FROM seu_donation
			WHERE donation_user_id = '$user_id'
			ORDER BY donation_date DESC
			";
			
			$result = $this->db->select($query);
			return $result;
		}
		
		public function deleteDonationHistory($d_id, $data){
			$donation_id = $this->fm->validation($data['donation_id']);
			$donation_id			= mysqli_real_escape_string($this->db->link,$donation_id);
			
			$query = "
				DELETE FROM seu_donation
				WHERE donation_user_id = '$d_id' && donation_id = '$donation_id'
			";
			
			$result = $this->db->delete($query);
			
			echo $result;
			
			exit();
			if($result != FALSE){
				$msg =
					"
						<div class='alert alert-success'>
							<h5 align='center'>History deleted!.</h5>
						</div>
					"
					;
				  return $msg;
			}else{
				$msg =
					"
						<div class='alert alert-danger'>
							<h5 align='center'>Unable to delete donation history!.</h5>
						</div>
					"
					;
				  return $msg;
			}
		}
}