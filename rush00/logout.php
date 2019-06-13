<?php
	session_start();
	unset($_SESSION['basket']);
	unset($_SESSION['login']);
	unset($_SESSION['passwd']);
	header ('Location: ./index.php');
?>