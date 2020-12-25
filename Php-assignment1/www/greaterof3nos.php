<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greater of 3 nums</title>
</head>
<body>


<?php
$num1 = $_GET["num1"];
$num1 = $_GET["num2"];
$num1 = $_GET["num1"];

if($num1=="" && $num2=="" && $num3=="") { 
    ?>

<form action="greaterof3nos.php" method="get">
Number 1: <input type="number" name="num1"><br>
Number 2: <input type="number" name="num2"><br>
Number 3: <input type="number" name="num3"><br>
<input type="submit" value="sumbit">


</form>



<?php }

else{


if(($num1>$num2) && ($num1>$num3)){
    echo "$num1 is the Greatest";
}
elseif(($num2>$num1) && ($num2>$num3)){
    echo "$num2 is the Greatest";
}
// elseif(($num3>$num1) && ($num3>$num2))
else{
    echo "$num3 is the Greatest";
} }
?>   


</body>
</html>