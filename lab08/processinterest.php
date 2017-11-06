<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Unit 8 Lab: Interest</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
        $principal = $_REQUEST["principal"];
        $interest_rate = $_REQUEST["interestRate"];
        $years = $_REQUEST["numberOfYears"];
        $answer = ($princial * (1 + ($interest_rate * $years)));
        
        function interest() {
            return $answer;
        }
        
        echo interest("After $years years, an investment of $principal at a $interest_rate interest rate will be worth $answer.");
        
        ?>
    </body>
</html>
