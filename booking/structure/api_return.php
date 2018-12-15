<?php
	// require_once '/connectDB.php';
    require_once('../dbconfig.php'); // This is line 38
	session_start();

	if (isset($_POST['ID_device'])){
		$ID_device = $_POST['ID_device'];
		$dateb = '0000-00-00';
		$timeb = '00:00:00';
		$dater = '0000-00-00';
		$timer = '00:00:00';
		$user_id = '-';


		
			
		}
		$sql = "UPDATE device  SET date_booking = '$dateb',time_booking = '$timeb',date_return = '$dater',time_return = '$timer',student_id = '$user_id',status = 'ว่าง' where ID_device = '$ID_device'";
		// if (isset($_POST['inputPassword'])) {
		// 	$inputPassword = $_POST['inputPassword'];

		// 	$sql.= ",password = '$inputPassword'";

		// }
		// $sql.="WHERE user_id = $user_id";


		
		if($conn->query($sql)){
			echo "คืนสำเร็จ";
		}else{
			echo "คืนผิดพลาด";
		}
		
	

?>

