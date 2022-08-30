<?php 
echo "APPENDING AND WRITING FILE<BR>";
// $fptr=fopen("Hello.txt","w");
// fwrite($fptr,"This File is created using writing mode");
// fclose($fptr);
$fptr=fopen("Hello.txt","a");
fwrite($fptr,"\n This File is created using append mode" );
?>