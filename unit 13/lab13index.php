<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unit 13 Lab | Sign Up Page</title>
		<meta charset="utf-8">
		<script>
			function confirmInfo() {
				var fname;
				var lname;
				var email;
				var phone;
				
				fname = document.conFo.fName.value;
				lname = document.conFo.lName.value;
				email = document.conFo.email.value;
				phone = document.conFo.phone.value;
                
				
                if (fname == "") {
                    alert("Please enter your first name.");
                    return false;
                } else if (lname == "") {
                    alert("Please enter your last name.");
                    return false;
                } else if (email == "") {
                    alert("Please enter your email.");
                    return false;
                } else if (phone == "") {
                    alert("Please enter your phone number.");
                    return false;
                } else {
                    return true;
                }
                
			}
		
		</script>
	</head>
	<body>
        <p><h1>Sign-Up</h1></p>
		<form id="conFo" name="conFo" action="confirm.php" method="get" onsubmit="return confirmInfo();">
			<p>First Name: <input type="text" name="fName" id="fName"></p>
			<p>Last Name: <input type="text" name="lName" id="lName"></p>
            <p>Email: <input type="text" name="email" id="email"></p>
            <p>Phone Number: <input type="text" name="phone" id="phone"></p>
			<p><input type="submit" id="submit" name="submit"  value="Submit"></p>
		</form>
	</body>
</html>
