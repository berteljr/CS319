
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unit 13 Lab | Confirmation Page</title>
		<meta charset="utf-8">
	</head>
	<body>
        <?php
        
        if (isset($_REQUEST["fName"])) {
            $fname = $_REQUEST["fName"];
        } else {
            $fname = "";
        }
        
        if (isset($_REQUEST["lName"])) {
            $lname = $_REQUEST["lName"];
        } else {
            $lname = "";
        }
        
        if (isset($_REQUEST["email"])) {
            $email = $_REQUEST["email"];
        } else {
            $email = "";
        }
        
        if (isset($_REQUEST["phone"])) {
            $phone = $_REQUEST["phone"];
        } else {
            $phone = "";
        }
        
        if ($fname == "" || $lname == "" || $email == "" || $phone == "") {
            echo "Please resubmit the form, as there is insufficient information.";
        } else {
            echo "<p>Thank you, " . $fname . " " . $lname . "!</p>";
            echo "<p>Confirmation messages have been sent to your email, " . $email . ", " . "and your phone number, " . $phone . "!</p>";
        }
        ?>
	</body>
</html>
