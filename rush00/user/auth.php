<?php
	session_start();
	if ($_POST['login'] != "" && $_POST['passwd'] != "") {
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['passwd'] = $_POST['passwd'];
		$tmp = hash('whirlpool', $_POST['passwd']);
		if (file_exists("./private/passwd")) {
			$access = file_get_contents("./private/passwd");
			$access = unserialize($access);
			foreach ($access as $value) {
				if ($value["login"] == $_POST['login'] && $value["passwd"] == $tmp) {
					echo "Welcome ".$_POST['login']."!\n";
				}
				else if ($value["login"] == $_POST['login'] && $value["passwd"] != $tmp) {
					echo "Wrong data!";
					header ('Location: ./login.html');
					exit();
				}
				else {
					header ('Location: ./fail.php');
					exit();
				}
			}
		} else {
			header ('Location: ./fail.php');
			exit();
		}
	} else {
		echo "You have to fill all the fields and press an \"OK\" button\n";
		header ('Location: ./login.html');
	}
?>