<?php 
echo "Connecting database and php";
//There are two ways to connect SQL and php
// mysqli extension and PDO
// PDO php data object
$servername="localhost";
$username="root";
$pass="";

$con=mysqli_connect($servername,$username,$pass);
if(!$con){
    die("SORRY CONNECTION NOT ESTABLISHED WITH DATABASE".mysqli_connect_error());
}
echo "<br>Connection Successful";
?>