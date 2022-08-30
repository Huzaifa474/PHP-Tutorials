<?php 
echo "COOKIE IN PHP";
//sessions are used to store sensitive data while cookie store not more sensitive data
//set cookie
setcookie("catagory","books",time()+86400,"/");
echo "Cookie is set";
?>