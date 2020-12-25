<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OddEven</title>
</head>
<body>
<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

if($num1=="" && $num2==""){
    ?>

    <form action="oddeven.php" method="get" style="text-align: center;">
    Starting Range: <input type="number" name="num1"><br>
    <hr>
    Ending Range: <input type="number" name="num2"><br>
    <hr>
    <input type="submit" value="Range of ODD/Even Numbers">

</form>
<?php }

else{

for($i = $num1 ; $i < $num2 +1 ; $i++){
    if($i % 2 == 0){
        echo "$i is an Even number <br>";
        
    }
    else{
        echo "$i is an Odd number <br>";
    }
}
}



?>




    
</body>
</html>