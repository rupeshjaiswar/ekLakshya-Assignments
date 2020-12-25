<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usernames</title>
</head>
<body>
    <?php

    

    $username = $_GET["username"];
    $user = array("John","Milton","Rupesh","Rahul");

    if($username==NULL) { 
        ?>
        
        <form action="usernamearray.php" method="get" style="font-family: sans-serif;">
            Enter Username: <input type="text" name="username" placeholder="Enter Username"><br>
            <hr>
            <input type="submit" value="Search">
        </form>
        
    <?php }
    else{
        $flag = 0;
        foreach($user as $value){

        
            if($username == $value){

                $flag = 1;

            }
        }
            if($flag == 1){

                echo "Welcome $username";
            
            } 
            else{
                
                echo "Wrong User";
            }
        }
        

        
    





?>




    
</body>
</html>