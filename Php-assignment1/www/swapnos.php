<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reverse</title>
</head>
<body>
  <?php
  $num = $_GET["num"];
  $temp = $num;
  $new = 0;

  if($num=="" && $str==""){
    ?>
    <h2 style="text-align: center;">Reverse</h2>
    <hr>
    <form action="swapnos.php" method="get" style="text-align: center;">
    Number: <input type="number" name="num">

    
    <input type="submit" value="Swap">
    </form>


  <?php }
  else{
  while($num > 1){
    $r = $num % 10;
    $new = $new * 10 +$r;
    $num = $num / 10;
    
    

  }
  echo "After swapping $temp the new number is: $new"."<br>";


  
  
}


?>
  
</body>
</html>