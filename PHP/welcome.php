<!DOCTYPE html>
<html>

<body>
<link rel="stylesheet" href="../CSS/style.css">
<form action="/welcome.php">
  <div class="container">
    <h1> Sign up now to recieve a free cat! </h1> 
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
	
	<label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <button type="submit" class="signupbtn">Sign Up</button>

</form>

<?php
	$fnameErr = $lnameErr = $emailErr = "";
	$fname = $lname = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["fname"])) {
		$nameErr = "Name is required";
	  } else {
		$name = test_input($_POST["fname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
		  $fnameErr = "Only letters and white space allowed"; 
		}
	  }
	  
	  if (empty($_POST["lname"])) {
		$nameErr = "Name is required";
	  } else {
		$name = test_input($_POST["lname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
		  $lnameErr = "Only letters and white space allowed"; 
		}
	  }
	  
	  if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
	  }
	}
	?>
</body>
</html>