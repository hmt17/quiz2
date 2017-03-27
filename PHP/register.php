<!DOCTYPE html>
	<?php
	$cookie_fname = "user";
	$cookie_fname = "user";
	$cookie_email = "email@email";
	setcookie($cookie_fname, $cookie_lname, $cookie_email, time() + (86400 * 30), "/"); 
	?>
	<html>
	<body>

	<?php
	if(!isset($_COOKIE[$cookie_fname])) {
		 echo "Cookie named '" . $cookie_fname . "' is not set!";
	} else {
		 echo "Cookie '" . $cookie_fname . "' is set!<br>";
		 echo "Value is: " . $_COOKIE[$cookie_fname];
	}
	
	if (isset($_COOKIE[['cookie_email']) && isset($_COOKIE['cookie_name') && isset($_COOKIE['cookie_lname')) {
    
		if (($_POST['cookie_email'] != $cookie_email)) {    
			echo 'You already used the email: ' . $_COOKIE['cookie_email'];
		}
		else {
			header('Location: login.html');
		}
	}
	?>
	</body>
	</html>