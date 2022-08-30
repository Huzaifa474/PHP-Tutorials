<?php
if(isset($_REQUEST['submit'])){
    $no1=$_REQUEST['firstno'];
    $no2=$_REQUEST['secondno'];
    $operator=$_REQUEST['operator'];
    if($operator=='+'){
        $res=$no1+$no2;
    }
    else if($operator=='-'){
        $res=$no1-$no2;
    }
    else if($operator=='*'){
        $res=$no1*$no2;
    }
    else if($operator=='/'){
        $res=$no1/$no2;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Using PHP</title>
</head>
<body>
    <form>
<input type="text" name="firstno" placeholder="Enter first no">
<input type="text" name="secondno" placeholder="enter seocnd no">
<select name="operator" id="">
    <option >+</option>
    <option >-</option>
    <option >*</option>
    <option >/</option>
</select>
<input type="submit" value="calculate" name="submit">
<p>OUTPUT:<?php echo $res;?></p>
    </form>
    
</body>
</html>