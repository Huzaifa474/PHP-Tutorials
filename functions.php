<?php 
echo"FUNCTIONS IN PHP <br>";

function processMarks($marks){
    $sum=0;
    foreach($marks as $value){
        $sum+=$value;
    }
    return $sum;
}
function calPersontage($tmarks){
    $Per=($tmarks*100)/500;
    return $Per;
}
function avgMarks($marks){
    $sum=0;
    $i=0;
    foreach($marks as $value){
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}

$std1=array(56,77,45,12,90);
$stdmarks=processMarks($std1);
$Stdper=calPersontage($stdmarks);
$stdavg=avgMarks($std1);
echo "Total Marks:".$stdmarks."<br>";
echo "Average Marks".$stdavg."<br>";
echo "Persontage:".$Stdper."%";

$std2=array(88,65,43,49,83);
$stdmarks1=processMarks($std2);
$Stdper1=calPersontage($stdmarks1);
echo "<br>Total Marks:".$stdmarks1."<br>";
echo "Persontage:".$Stdper1."%";
?>