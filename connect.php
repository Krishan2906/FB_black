<?php
 $host='localhost';
 $user='root';
 $pass='root';
 $conn=new mysqli($host,$user,$pass);
 if($conn->connect_error){
  echo $conn->connect_error;
 }
 else{
//   echo "connected<br>";
 }

 $sql = "use myDB";
 if ($conn->query($sql) === TRUE) {
    /* echo "using myDB <br>"; */
 } else {
     echo "Error using database: " . $conn->error;
 }
?>
