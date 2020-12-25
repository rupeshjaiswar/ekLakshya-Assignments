<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong</title>
</head>
<body>
    <?php
    $num = $_GET["num"];
    $temp = $num;
    $new = 0;

    if($num=="") {
        ?>
        <h2 style="text-align: center;">Armstrong</h2>
        <hr>
        <form action="armstrong.php" method="get" style="text-align: center;">
        Number: <input type="number" name="num">
        <input type="submit" value="Armstrong">
    
    </form>
    <?php }
    else{
        while($num != 0)  
        {  
        $r = $num % 10;  
        $new = $new + pow($r,3);  
        $num = $num / 10;  
        }  
        if($temp == $new)  
        {  
        echo "$temp is an Armstrong number"."<br>";  
        }  
        else  
        {  
        echo "$temp is not an armstrong number"."<br>";  
        } 





    }




?>
    
</body>
</html>