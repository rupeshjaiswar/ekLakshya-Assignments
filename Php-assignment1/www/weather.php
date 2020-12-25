

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
</head>
<body>
     <?php
      $climate=$_GET['weather'];
     ?>
    
    <form action="weather.php" method="get">
      <select name="weather" id="season">
      <option value="select">--select--</option>
      <option value="sunny">Sunny</option>
      <option value="rainy">Rainy</option>
      <option value="windy">Windy</option>
      <option value="cold">Cold</option>
       </select>
      <input type="submit" name="btn" value="suggestion">
    </form>
    <?php
      switch($climate)
      {
          case 'sunny':
            echo "Weather is sunny,take cold drink,keep sun glasses with you and stay cool";
            break;
          case 'rainy':
            echo "weather is rainy,keep umbrella with you and u can take hot tea";
            break;
          case 'windy':
            echo "Weather is windy";
            break;
          case 'cold':
            echo "Weather is cold,wear warm cloths";
            break;
          default:
             echo "Please select weather";
         }
    ?>
</body>
</html>