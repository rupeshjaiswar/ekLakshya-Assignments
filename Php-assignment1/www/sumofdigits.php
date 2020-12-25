<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Digits</title>
</head>
<body>
    <?php
    $num = $_GET["num"];
    $sum = 0;

   

    if($num==""){
        ?>
        <h2 style="text-align:center;">Sum of Digits</h2><br>
        <hr>
        <form action="sumofdigits.php" method="get" style="text-align: center;">
        Number: <input type="number" name="num">
        <input type="submit" value="Calculate">
    </form>
    <?php }
    else{



    for($i=0; $i<strlen($num); $i++){
        $sum = $sum + $num[$i];
    }
    echo "The sum of digits in $num is: ". $sum;

}







?>



    
</body>
</html>