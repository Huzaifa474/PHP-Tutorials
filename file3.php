<?php 
echo"MORE ABOUT FILE<br>";
$fptr=fopen("myfile.txt","r");
// echo fgets($fptr);// read line by line
// while($a=fgets($fptr)){
//     echo $a;
// }
// echo "REACHED END OF FILE";

while($a=fgetc($fptr)){//read character by character
    echo $a;
}
echo "REACHED END OF FILE";
fclose($fptr);
?>