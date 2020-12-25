<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    $num = $_GET["num"];
    $count = 1;

    if($num=="") {
        ?>
    <h2 style="font-family: serif; text-align:center">Factorial</h2>
    <form action="factorial.php" method="get" style="text-align: center;">
        Number: <input type="number" name="num">
        <input type="submit" value="Get Factorial">
    </form>



    <?php }
        
        
        for($i = $num; $i >= 1; $i--){
            
        
            $count = $count*$i;
        }

        echo "The Factorial of $num = ".$count;






    
    ?>
    
</body>
</html>