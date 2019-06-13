<?php
	header('WWW-Authenticate: Basic realm="The Realm"');
	header('HTTP/1.0 401 Unauthorized');
	$user="zaz";
	$pass="jaimelespetitsponeys";
	if ($_SERVER['PHP_AUTH_USER'] == $user && $_SERVER['PHP_AUTH_PW'] == $pass) {
		echo "<html><body>"."\n"."Hello Zaz<br />"."\n"."<img src='data:image/png;base64,".
		base64_encode(file_get_contents("../img/42.php"))."'>".
		 "\n"."</body></html>";
	}
	else {
		echo "<html><body>That area is accesible for members only</body></html>";
	}
?>
