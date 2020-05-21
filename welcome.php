<?php
include "connect.php";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['mail'];
$pass=$_POST['password'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gender'];
//creating date
$date=$year;
$date.='-';
$date.=$month;
$date.='-';
$date.=$day;

$sql="INSERT INTO details VALUES('".$fname."','".$lname."','".$email."','".$pass."','".$date."','".$gender."')";

if($conn->query($sql)){
    echo "successfully registered";
}
else{
    echo $conn->error;
}

?>