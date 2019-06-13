<?php
	if ($_POST["login"] != "" && $_POST["oldpw"] != "" && $_POST["newpw"] != ""
		&& $_POST["submit"] == "OK") {
		if (file_exists("../private/passwd")) {
			$access = file_get_contents("../private/passwd");
			$access = unserialize($access);
			$i = 0;
			foreach ($access as $value) {
				$tmp = hash('whirlpool', $_POST["oldpw"]);
				if ($value["login"] == $_POST["login"] && $value["passwd"] == $tmp &&
						$_POST["newpw"] != "") {
					$access[$i]["passwd"] = hash('whirlpool', $_POST["newpw"]);
					$access = serialize($access);
					file_put_contents("../private/passwd", $access);
					echo "OK\n";
					break ;
				}
				elseif ($value["login"] == $_POST["login"] && ($value["passwd"] != $tmp)
				|| $_POST["newpw"] == "")
					echo "ERROR\n";
				else
					$i++;
			}
		} else
			echo "ERROR\n";
	} else
		echo "ERROR\n";
?>