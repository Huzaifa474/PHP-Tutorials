<?php 
echo "Assoiative Array in php";

//Simple array is also called Numeric or indexed array

$capcity=array(
    'pakistan'=>'Islamabad',
    'india'=>'New Dehli',
    'Bangladesh'=>'Dhaka',
);
foreach ($capcity as $key => $value) {
    echo "<br> Captital of". $key ."is". $value;
}

?>