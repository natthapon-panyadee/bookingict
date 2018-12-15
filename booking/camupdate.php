<?php
require_once './dbconfig.php';

if (isset($_POST['submitUp'])){
    $ID_device=$_POST['ID_device'];
    $date_booking= mysqli_real_escape_string($conn,$_POST['date_booking']);
    $date_return= mysqli_real_escape_string($conn,$_POST['date_return']);
    $time_booking= mysqli_real_escape_string($conn,$_POST['time_booking']);
    $time_return= mysqli_real_escape_string($conn,$_POST['time_return']);
    
    $sql="UPDATE `device` SET "
            . "`date_booking`='$date_booking',`date_return`='$date_return',"
            . "`time_booking`='$time_booking',`time_return`='$time_return'"
            . "WHERE `ID_device`='$ID_device'";
    
    echo $sql;
    $result= mysqli_query($conn,$sql);
    if ($result==1)header ("Location:cam1.php");
    
}else    echo "ไอสัสวุ่นวายชิบหาย";

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

