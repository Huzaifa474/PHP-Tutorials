<?php 
echo" For each loops in php <br>";

$arr=array("Mango","Bread","Butter","Chicken");
echo"USING FOR-LOOP<BR>";
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo "<br>";
}
echo"USING FOR-EACH LOOP<br>";
foreach($arr as $value){
    echo "$value"."<br>";
}

?>