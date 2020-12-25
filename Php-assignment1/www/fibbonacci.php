
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <?php

    $num = $_GET["num"];
    $num1 = 0; 
    $num2 = 1; 
    $counter = 0; 

    if($num==""){
        ?>

        <h2 style="text-align: center;">Fibbonacci</h2>
    
        <form action="fibbonacci.php" method="get" style="text-align: center;">
        Number: <input type="number" name="num">
        <input type="submit" value="Fibonacci Series">

    </form>
    <?php }

while ($counter < $num){ 
    echo ' '.$num1; 
    $num3 = $num2 + $num1; 
    $num1 = $num2; 
    $num2 = $num3; 
    $counter += 1; 
} 
 
    

    







?>
    
</body>
</html>