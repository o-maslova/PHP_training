<html>
<head>
	<meta charset="utf-8" />
	<title>Basket</title>
</head>
	<body>
		<?php
			session_start();
			if ($_SESSION['basket']['goods']) {
				echo "В вашей корзине ".$_SESSION['basket']['goods']." единицы";
				foreach ($_SESSION['basket']['goods'] as $elem)
					print_r($elem);
			}
			else
				echo "В вашей корзине нет товаров";
		?>
	</body>
</html>