<?php
	// require_once '/connectDB.php';
    require_once('../dbconfig.php'); // This is line 38

	// if (isset($_POST['ID_device'])){
	// 	$inputFullName = $_POST['ID_device'];
	// 	$inputEmail = $_POST['date_booking'];
	// 	$inputUsername = $_POST['time_booking'];
	// 	$inputPassword = $_POST['date_return'];
	// 	$inputCfPassword = $_POST['time_return'];
		
		
	// 	$sql = "INSERT INTO booking ( ID_device ,date_booking,time_booking,date_return,time_return) VALUES ( '$inputFullName', '$inputEmail','$inputUsername', '$inputPassword','$inputCfPassword')";
	// 	echo $sql;
	// 	if($conn->query($sql)){
	// 		echo "จองสำเร็จ";
	// 	}else{
	// 		echo "สมัครสมาชิกผิดพลาด";
	// 	}
		
	// }
	
	// require_once '/connectDB.php';
	

	session_start();

	if (isset($_POST['ID_device'])){
		$ID_device = $_POST['ID_device'];
		$dateb = $_POST['date_booking'];
		$timeb = $_POST['time_booking'];
		$dater = $_POST['date_return'];
		$timer = $_POST['time_return'];
		$user_id = $_SESSION['user'];


		
			
		}
		$sql = "UPDATE device  SET date_booking = '$dateb',time_booking = '$timeb',date_return = '$dater',time_return = '$timer',student_id = '$user_id',status = 'ไม่ว่าง' where ID_device = '$ID_device'";
		// if (isset($_POST['inputPassword'])) {
		// 	$inputPassword = $_POST['inputPassword'];

		// 	$sql.= ",password = '$inputPassword'";

		// }
		// $sql.="WHERE user_id = $user_id";


		echo $sql;
		if($conn->query($sql)){
			echo "จองสำเร็จ";
		}else{
			echo "จองผิดพลาด";
		}
		
	

?>

