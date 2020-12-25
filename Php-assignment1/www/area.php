<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
    <script>

    </script>
</head>
<body>



<h2 style="text-align: center;">Calculate Area</h2>
<form action="area.php" method="get" style="text-align: center;">
<span> Choose the Shape: <input type="radio" name="area" id="tri" value="triangle">Triangle
<input type="radio" name="area" id="rect" value="rectangle">Rectangle
<input type="radio" name="area" id="cir" value="circle">Circle
<input type="radio" name="area" id="sqr" value="square">Square
<input type="submit" value="Show"><hr>
</span>
</form>

<?php

$length = $_GET["num1"];
$breadth = $_GET["num2"];
$side = $_GET["num3"];
$base = $_GET["num4"];
$height = $_GET["num5"];
$radius = $_GET["num6"];

if($length=="" && $breadth=="" && $side=="" && $base =="" && $height =="" && $radius ==""){



    ?>


    <form action="area.php" method="get" style="text-align: center;">
    


    <h3>For Rectangle</h3><br>
    length: <input type="number" name="num1">
    breadth: <input type="number" name="num2">
    <input type="submit" value="Area"><br><hr>


    <h3>For Square</h3>
    Side: <input type="number" name="num3">
    <input type="submit" value="Area"><br>
    <hr>

    <h3>For Triangle</h3><br>
    base: <input type="number" name="num4">
    height: <input type="number" name="num5">
    <input type="submit" value="Area"><br><hr>

    <h3>For Circle</h3>
    Radius: <input type="number" name="num3">
    <input type="submit" value="Area"><br>
    <hr>


 

</form>

<?php }

else {
    if(isset($_GET["area"])){
    if($length !="" && $breath != ""){
        echo $length*$breadth;
    }
}
}



?>







    
</body>
</html>