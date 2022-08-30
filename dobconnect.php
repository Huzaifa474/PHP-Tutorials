<?php 

echo "CREATING TABLE USING PHP<br>";
$servername="localhost";
$username="root";
$pass="";
$db="dbHuzaifa";
$con=mysqli_connect($servername,$username,$pass,$db);
if($con==true){
    echo "DATA BASE CONNECTED";
}
else{
    echo "error";
}
?>