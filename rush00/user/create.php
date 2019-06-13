<?php
	session_start();
	if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK") {
		$is_value = 0;
		$check = 0;
		$_SESSION['login'] = $_POST["login"];
		$_SESSION['passwd'] = $_POST["passwd"];
		if (!file_exists("./private"))
		{
			header ('Location: ./fail.php');
			mkdir("./private", 0777, true);
			exit();
		}
		if (file_exists("./private/passwd")) {
			$access = file_get_contents("./private/passwd");
			$access = unserialize($access);
			foreach ($access as $value) {
				if ($value["login"] == $_POST["login"]) {
					$is_value = 1;
					break ;
				}
			}
			if (!$is_value) {
				$access[] = [
					"login" => $_POST["login"],
					"passwd" => hash('whirlpool', $_POST["passwd"])
				];
				$test = serialize($access);
				file_put_contents("./private/passwd", $test, FILE_APPEND);
				echo "Congratulations!"."\n"."You have been succesfully create a profile\n";
			}
			else
				echo "Welcome ".$_SESSION['login']."!\n";
		} else {
			$access[] = [
				"login" => $_POST["login"],
				"passwd" => hash('whirlpool', $_POST["passwd"])
			];
			$test = serialize($access);
			file_put_contents("./private/passwd", $test, FILE_APPEND);
			echo "You have been succesfully create a profile\n";
		}
	} else
		echo "You have to fill all the fields and press an \"OK\" button\n";
?>
<html>
	<head></head>
<body>
	<a href="./../"><br>Go home:)</a>
</body>
</html>