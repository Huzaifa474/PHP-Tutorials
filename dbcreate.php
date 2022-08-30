<?php 
echo "CREATING DATABASE USING PHP";
$servername="localhost";
$username="root";
$pass="";
$con=mysqli_connect($servername,$username,$pass);
$sql="CREATE database dbHuzaifa";
mysqli_query($con,$sql);

?>