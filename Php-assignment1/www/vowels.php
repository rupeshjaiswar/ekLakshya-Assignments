<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowels</title>
</head>
<body>
    <?php

    $str = $_GET["text"];

    if($str==""){
        ?>
        <h2 style="text-align:center">Counting Vowels</h2><br>
        <hr>
        <form action="vowels.php" method="get" style="text-align: center;">
        Write here:
        <textarea name="text" cols="30" rows="10" style="text-align: center;"></textarea><br>
        <hr>
        <input type="submit" value="Count Vowels">
    
    </form>
    <?php }

    echo "Number of vowels in <pre>$str</pre> is :".preg_match_all('/[aeiou]/i', $str, $matches); 



?>
    
</body>
</html>