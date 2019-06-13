<?php
	function auth($login, $passwd) {
		if ($login != "" && $passwd != "") {
			$tmp = hash('whirlpool', $passwd);
			if (file_exists("../private/passwd")) {
				$access = file_get_contents("../private/passwd");
				$access = unserialize($access);
				foreach ($access as $value) {
					if ($value["login"] == $login && $value["passwd"] == $tmp) {
						return (1);
					}
				}
			} else
				return (0);
		} else
			return (0);
	}
?>