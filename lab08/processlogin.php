<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 8 Lab Task 1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
        $user_name = $_REQUEST["userName"];
        $password = $_REQUEST["password"];
        
        //echo $name;
        //echo $first_pass;
        //echo $second_pass;
        
        if ($user_name != "Admin") {
            echo "<p>Invalid Login, particularly the Username</p>";
        } else if ($password != "CS319"){
            echo "<p>Invalid Login, particularly the Password</p>";
        } else {
            echo "<p>Login Successful</p>";
        }
        
        ?>
    </body>
</html>
