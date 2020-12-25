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
  $str = $_GET["str"];
  $temp = $num;
  $new = 0;

  if($num=="" && $str==""){
    ?>
    <h2 style="text-align: center;">Reverse</h2>
    <hr>
    <form action="reverse.php" method="get" style="text-align: center;">
    Number: <input type="number" name="num"><br>
    <hr>
    String: <input type="text" name="str"><br>
    <hr>
    <input type="submit" value="Reverse">
    </form>


  <?php }
  else{
  while($num > 1){
    $r = $num % 10;
    $new = $new * 10 +$r;
    $num = $num / 10;
    
    

  }
  echo "Reverse of $temp is $new"."<br>";

  echo "Reverse of $str is ".strrev($str);
  
}


?>
  
</body>
</html>