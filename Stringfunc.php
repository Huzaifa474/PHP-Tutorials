<?php 
$name="Huzaifa";
echo "$name";
echo "<br>";
echo strlen($name); //strlen() is used to tell length of string 
echo "<br>";
echo  str_word_count($name); //str_word_counr() is used to tell number of words in string 
echo "<br>";
echo strrev($name); // strrev() is ued to reverse the string 
echo "<br>";
echo strpos($name,"f"); // strpos() is used to search in string and return index no 
echo "<br>";
echo str_replace("Huzaifa","Saim",$name); // used to replace first arguument is what you want to replace second argument is what you want to insert after replace and third argument is where you want to replace 
echo "<br>";
echo str_repeat($name,2); // str_repeat() is used to repeat 
echo "<br>";
echo "<pre>";
echo  rtrim("     You are good       ");// rtrim is used to remove spaces from right 
echo "<br>";
echo ltrim("       you are good      ");//ltrim is used to remove speace from left
echo "</pre>";
echo "<br>";
?>