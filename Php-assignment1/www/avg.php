<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Marks</title>
</head>
<body>

    <?php
    $marks1 = $_GET["marks1"];
    $marks2 = $_GET["marks2"];
    $marks3 = $_GET["marks2"];
    $total = $marks1 + $marks2 + $marks3;
    $average = ($marks1 + $marks2 + $marks3) / 3;

    if($marks1=="" && $marks2=="" && $marks3=="") {
        ?>

        <h2 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"></h2>

        <form action="avg.php" method="get">
            Marks 1: <input type="number" name="marks1"><br>
            <hr>
            Marks 2: <input type="number" name="marks2"><br>
            <hr>
            Marks 3: <input type="number" name="marks3"><br>
            <hr>
            <input type="submit" value="Calculate Average">
        </form>
    <?php }
    else{

    if($average >= 90){
        echo "Total marks in all 3 subjects are: ".$total."<br>";
        echo "And the Average is: ".$average."<br>";
        echo "The student having $average: is awarded with A+ grade";

    }
    elseif($average >= 80 && $average < 90) {
        echo "Total marks in all 3 subjects are: ".$total."<br>";
        echo "And the Average is: ".$average."<br>";
        echo "The student having $average: is awarded with B grade";
    }
    elseif($average >= 70 && $average < 80) {
        echo "Total marks in all 3 subjects are: ".$total."<br>";
        echo "And the Average is: ".$average."<br>";
        echo "The student having $average: is awarded with C grade";
    }
    else{
        echo "Soorry But the student is failed has to buckle up";
    }
}





?>



    
</body>
</html>