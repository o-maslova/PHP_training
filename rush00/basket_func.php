<?php
	session_start();

	$basket['id'] = $_POST['id'];
	$basket['name'] = $_POST['name'];
	$basket['amount'] = $_POST['amount'];
	$basket['price'] = $_POST['price'];

	array_push($_SESSION['basket']['products'], $basket);;
	if(isset($_POST['id'])) {
		if (isset($_SESSION['basket']['goods'])) {
			$_SESSION['basket']['goods'] += 1;
			$_SESSION['basket']['total'] += $basket['price'];
		}
		else {
			$_SESSION['basket']['goods'] = 1;
			$_SESSION['basket']['total'] = 1;
		}
		echo "Вы добавили товар в карзину!<br/>";
	}
?>