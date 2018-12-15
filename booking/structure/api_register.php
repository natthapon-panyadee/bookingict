<?php

  require_once('../dbconfig.php');

if (isset($_POST['studentID'])) {
    $studentID = $_POST['studentID'];
    $name = $_POST['name'];
    $sur = $_POST['surname'];
    $maj = $_POST['major'];
    $num = $_POST['phonenumber'];
    $pass = $_POST['password'];
    $conpass = $_POST['confirmpassword'];

    if ($conpass == $pass) {
        $md5pass = md5($pass);
        $sql = "INSERT INTO user(student_id, name,surname, major, phone_number, password)"
                . "VALUES ('$studentID', '$name', '$sur', '$maj', '$num', '$md5pass')";
        //  echo $sql;
        $result = mysqli_query($conn, $sql);
        // $res = mysqli_query($conn, $sql);
        // if ($res == 1)
        //     header("Location:loginict.php");
        echo "สำเร็จ";
    } else {
        echo "กรอกข้อมูล password ไม่ตรงกัน";
    }
}

?>