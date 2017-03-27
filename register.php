<!DOCTYPE html>
	<?php
	$cookie_name = "user";
	$cookie_email = "email@email";
	setcookie($cookie_name, $cookie_email, time() + (86400 * 30), "/"); 
	?>
	<html>
	<body>

	<?php
	if(!isset($_COOKIE[$cookie_name])) {
		 echo "Cookie named '" . $cookie_name . "' is not set!";
	} else {
		 echo "Cookie '" . $cookie_name . "' is set!<br>";
		 echo "Value is: " . $_COOKIE[$cookie_name];
	}
	?>

</body>
</html>