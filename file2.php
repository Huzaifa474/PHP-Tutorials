<?php 
echo "MORE ABOUT FILES IN PHP<br>";
$fptr=fopen("myfile.txt","r");
$content=fread($fptr,filesize("myfile.txt"));
echo $content;
fclose($fptr);

?>