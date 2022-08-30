<?php 
echo "DELETING RECORDS IN PHP";
$servername="localhost";
$username="root";
$pass="";
$db="dbhuzaifa";
$con=mysqli_connect($servername,$username,$pass,$db);
if($con==true){
    $query="DELETE FROM `trip` WHERE `dest`='London'";
    $sql=mysqli_query($con,$query);
    if($query==true){
        echo "<br>Records Successfully Deleted";
    }
    else{
        die("ERROR IN DELETING RECORDS".mysqli_error($con));
    }
}
?>