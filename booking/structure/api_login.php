<?php



 if(isset($_POST['studentID'])&&isset($_POST['password'])){
  session_start();
  require_once('../dbconfig.php');
  $sql = "SELECT * FROM user WHERE student_id = '".$_POST['studentID']."'";
  if($result=$conn->query($sql)){
   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
     // $_SESSION['admin'] = $row['admin_user'];
     $_SESSION['user'] = $row['student_id'];
     
     
    }
    echo "เข้าสู่ระบบสำเร็จ";
   }else{
    echo "ชื่อผู้ใช้งาน หรือรหัสผ่าน ไม่ถูกต้อง";
   }

  }else{
   echo "server error";
  }
  $conn->close();
 }
?>