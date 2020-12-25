<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <?php

    $year = $_GET["num"];
    
    if($year==""){
        ?>

        <h2 style="text-align: center;">Check leap year</h2><br>
        <hr>
        <form action="leapyear.php" method="get" style="text-align: center;">
        Enter Year: <input type="number" name="num">
        <input type="submit" value="Check">
    
    </form>

    <?php }

    else{

    // if($year%400==0 || $year%4==0){
    // echo "$year is a leap year";}

    // else{
    // echo "$year is not a leap year";
    // }

    function isLeap($year)
{
    return(date('L',mktime(0,0,0,1,1,$year))==1);
}
for($year=1991;$year<2016;$year++)
{
    if(isLeap($year))
    {
        echo"$year:Leap year<br/>";
    }
    else{
        echo "$year:Not leap year<br/>";
    }
}

}

    





   ?>







    
</body>
</html>