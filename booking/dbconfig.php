<?php
//localhost
//$localhost="119.59.120.5";
//$user="ictsuboo_bookingict";
//$password="13590013";
//$DB="ictsuboo_bookingict";
$host="127.0.0.1";
$user="root";
$password="";
$DB="bookingict";

$conn=new mysqli($host,$user,$password,$DB);

if (!$conn){
    die('เชื่อมต่อไม่ได้โวยยยยยยย :'.mysqli_error($conn));
}
     $conn->query("set names utf8");//เพื่อแสดงผล DB ภาษไทย

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$localhost="119.59.120.5";
//$user="ictsuboo_bookingict";
//$password="13590013";
//$DB="ictsuboo_bookingict";