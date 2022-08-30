<?php 

echo "CREATING TABLE USING PHP<br>";
$servername="localhost";
$username="root";
$pass="";
$db="dbHuzaifa";
$con=mysqli_connect($servername,$username,$pass,$db);
$name="Saleem";
$desti="USA";
$sql="INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$desti')";
$result=mysqli_query($con,$sql);
if($result==true){
    echo "<br>Data Inserted";
}
else{
    die("SORRY TABLE CANNOT BE CREATED".mysqli_connect_error());
}
?>