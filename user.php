<?php
include "connect.php";


$user=$_GET["user"];
$pass=$_GET["password"];

$sql="SELECT Passcode , FirstName , LastName FROM details WHERE Email LIKE '".$user."'";
$result=$conn->query($sql)->fetch_assoc();

if($pass===$result["Passcode"]){
    $name=$result["FirstName"]." ".$result["LastName"];
    echo "Welcome to your account ".$name;
}
else{
    echo $pass ." is wrong password<br>";
    echo "please!!!! Dont try to hack";
}


?>
