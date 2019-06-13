<?php
	if ($_POST["login"] != "" && $_POST["passwd"] != "" && $_POST["submit"] == "OK") {
		$is_value = 0;
		if (!file_exists("../private"))
			mkdir("../private", 0777, true);
		if (file_exists("../private/passwd")) {
			$access = file_get_contents("../private/passwd");
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
				file_put_contents("../private/passwd", $test);
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		} else {
			$access[] = [
				"login" => $_POST["login"],
				"passwd" => hash('whirlpool', $_POST["passwd"])
			];
			$test = serialize($access);
			file_put_contents("../private/passwd", $test);
			echo "OK\n";
		}
	} else
		echo "ERROR\n";
?>