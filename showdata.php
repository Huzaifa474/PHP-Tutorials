<?php 
$servername="localhost";
$username="root";
$pass="";
$db="contacts";
$con=mysqli_connect($servername,$username,$pass,$db);
$sql="SELECT * FROM `messages`";
$res = mysqli_query($con, $sql) or die( mysqli_error($con));
if($res==true){
$count=mysqli_num_rows($res);
if($count>0){
    $row=mysqli_fetch_array($res);
while($row=mysqli_fetch_array($res)){
    echo $row['ref'].$row['name']."<br>";
}
}
}
else{
    echo "error";
}
?>