<?php
	$my_arr = array();
	foreach ($_GET as $key => $value) {
		$my_arr += ["$key" => $value];
	}
	if (in_array("set", $my_arr)) {
		setcookie($my_arr["name"], $my_arr["value"]);
	}
	elseif (in_array("del", $my_arr)) {
		setcookie($my_arr["name"], "", time() - 3600);
	}
	elseif (in_array("get", $my_arr)) {
		echo $_COOKIE[$my_arr['name']]."\n";
	}
?>