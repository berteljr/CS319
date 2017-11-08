<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ask the 8-Ball</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        
        $question = $_REQUEST["question"];
        $answers = array("For sure!", "Totally yes", "Indeed, friend", "Meh", "Maybe", "I don't know, honestly", "Nah", "Nope", "Definitely not");
        $index = mt_rand(0, 8);
        
        while ($index < count($answers)) {
            echo "<p>You asked the 8-ball: " . $question . "</p>";
            echo "<p>The 8-ball responds: " . $answers[$index] . "</p>";
        }
        
        ?>
    </body>
</html>
