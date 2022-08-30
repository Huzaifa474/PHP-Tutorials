<?php 
echo "CREATING TABLE USING PHP<br>";
$servername="localhost";
$username="root";
$pass="";
$db="dbHuzaifa";
$con=mysqli_connect($servername,$username,$pass,$db);
$sql="CREATE TABLE  `Trip` (`SNO` Int(6) NOT NULL AUTO_INCREMENT ,`name` VARCHAR(12) NOT NULL ,`dest` VARCHAR(15) NOT NULL,PRIMARY KEY (`SNO`)) ";

$result=mysqli_query($con,$sql);
if($result==true){
    echo "TABLE CREATED";
}
else{
    die("SORRY TABLE CANNOT BE CREATED".mysqli_connect_error());
}

?>
