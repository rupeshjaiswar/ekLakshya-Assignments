<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <?php

    $num = $_GET["num"];
    $str = $_GET["str"];

    $temp = $num;
    $new = 0;

    while ($num != 0)
        {
            $r = $num % 10;
            $new = $new * 10 + $r;
            //below cast is essential to round remainder towards zero
            $num = (int)($num / 10); 
            }
             
            

    if($num=="" && $str=="")
    {
        ?>
        <h2 style="text-align: center;">Palimdrome</h2>
        <form action="palindrome.php" method="get" style="text-align: center;">
            Number: <input type="number" name="num"><br>
            <hr>
            String: <input type="text" name="str"><br>
            <hr>
            <input type="submit" value="Palindrome">
        </form>
    <?php }

    else{

if($new==$temp)
{
echo $temp," is Palindrome number"."<br>";
}
else
{
echo $temp." is not Palindrome number"."<br>";
}

if(strrev($str) == $str){
    echo "$str is Palindrome"."<br>";
}


else{
    echo "$str is not a Plaindrome"."<br>";
}
    }


    ?>








    
</body>
</html>