<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Calculator</title>
</head>
<body>

<h2 style="font-family: sans-serif;">Mini-Calculator</h2>

<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$oper = $_GET["operation"];


if($num1 =="" && $num2 =="" && $oper =="") { 
    ?>

<form action="calc.php" method="get">
    Number 1 <input type="number" name="num1"><br>
    <hr>
    Operation <input type="text" name="operation"><br>
    <hr> 
    Number 2 <input type="number" name="num2"><br>
    <hr>
    <input type="submit" value="Calculate">



</form>
<?php }

else{
    if($oper == "+"){
        echo "Addition is: ".($num1 + $num2);
    }
    elseif($oper == "-"){
        echo "Subtraction is: ".($num1 - $num2);
    }
    elseif($oper == "*"){
        echo "Multiplication is: ".($num1 * $num2);
    }
    elseif($oper =="/"){
        echo "Division is: ".($num1 / $num2);
    }
    elseif($oper =="^"){
        echo "$num1 raise to $num2 is: ".pow($num1,$num2);
    }
    else {
        echo "Enter proper operation (+, -, *, /, ^) only this operations are accepted";
    }

}







?>


    
</body>
</html>