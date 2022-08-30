<?php 
echo "MULTI DIMENSIONAL ARRAY IN PHP <BR>";
//Array within Array
$mularray=array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);
echo $mularray[1][2]."<br>";
// for ($i=0; $i< count($mularray) ; $i++) { 
//     echo "<br>".var_dump($mularray[$i]);
// }


// for ($i=0; $i< count($mularray) ; $i++) { 
//     for ($j=0; $j < count($mularray[$i]) ; $j++) { 
//         echo $mularray[$i][$j];
//     }
//     echo "<br>";
// }

$marks=array(
    "Std1"=>array(
        'E'=>45,
        'U'=>56,
        'M'=>77
    ),
    "Std2"=>array(
        'E'=>59,
        'U'=>67,
        'M'=>83
    ),
    "Std3"=>array(
        'E'=>63,
        'U'=>44,
        'M'=>92
    )
    );
foreach($marks as $value){
    echo $value['E']." ".$value['U']." ".$value['M']."<BR>";
}
?>