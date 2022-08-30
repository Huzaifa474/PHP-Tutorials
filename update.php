<?php 
echo "UPDATING DATA IN PHP";
$servername="localhost";
$username="root";
$pass="";
$db="dbhuzaifa";
$con=mysqli_connect($servername,$username,$pass,$db);
$sql="SELECT * FROM `trip` WHERE `dest`='USA' ";
$res = mysqli_query($con, $sql) or die( mysqli_error($con));
if($res==true){
    $count=mysqli_num_rows($res);
    $row=mysqli_fetch_array($res);
    if($count>0){
        $no=1;
    while($row=mysqli_fetch_assoc($res)){
        echo $no." ".$row['SNO'].$row['name'].$row['dest']."<br>";
        $no++;
    }
    }
}

$query1="UPDATE `trip` SET `name` = 'Saima' WHERE `trip`.`SNO` = 5";
$res1=mysqli_query($con,$query1);
$aff=mysqli_affected_rows($con);
echo "<br>".$aff."<br>";
if($res1==true){
    echo "Data Updated";
}
    else{
        echo "error";
    }

?>