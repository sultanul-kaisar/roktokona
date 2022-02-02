<?php
 if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['ChangeProfile'])){
		$s_id = Session::getUser('registered_student_id');
		$profileupload = $profile->updateProfileImage($s_id, $_FILES);
	}
?>