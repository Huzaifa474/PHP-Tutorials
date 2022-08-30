<?php 
echo "LOCAL , GLOBAL VARIABLES IN PHP <BR>";
// Scope means that where the variable is accessable
// local variable is accessable within the function
// global varibale is available every where by using the specific keyword of global 
$a=100; // Global varbale 
 function printValue(){
    // $a=99; local varible
    global $a;
    echo "VARIBALE:$a";
 }
echo "This is printing out side the function $a"."<BR>";
printValue();
echo "<br>";
//All the global variables ae stored in array named $GLOBAL 
echo var_dump($GLOBALS);
?>