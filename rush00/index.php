<?php
	session_start();
	require_once 'install.php';
	require_once 'connection.php';
	
	$sql = "SELECT * FROM flowers";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$array = array();
		while ($row = mysqli_fetch_assoc($result)) {
				$array[] = $row;
		}
	} else {
		echo "0 results";
	}
?>
<html>
	<meta charset="utf-8">
	<head>
		<title>Flowers</title>
		<link rel="stylesheet" href="./style.css">
		
	</head>
	<body>
		<div class="block_page">
			<div class="header">
				<div>
					<a href="./user/login.html">Вход</a>
					<a href="./user/create.html">Регистрация</a>
					<a href="./logout.php">Выйти</a>
				</div>
			</div>
			<ul class="navClass">
				<li><a href=".">Home</a></li>
				<li class="submenu"><a>Цветы</a>
					<ul>
						<li><a>Комнатные цветы</a></li>
						<li><a>Лукавицы цветов</a></li>
						<li><a>Розы</a></li>
					</ul>
				</li>
				<li><a href="./basket.php">Корзина</a></li>
				<li><a>Контакты</a></li>
			</ul>
			<div class="block_middle">
				<div>
					<div class="center">
						<figure>
							<img id="image" src="./resources/hyacinthus-mix.jpg" title="Гиацинт">
								<br><a><?php echo $array[0]['name']?><form action="basket_func.php" method="post">
									Цена товара: <?php echo $array[0]['price']?> грн.<br/>
									Кол-во товара: <?php echo $array[0]['amount']?><br/>
									<input type="hidden" value="<?php echo $array[0]['id']; ?>" name="id">
									<input type="hidden" value="<?php echo $array[0]['name']; ?>" name="name">
									<input type="hidden" value="<?php echo $array[0]['amount']; ?>" name="amount">
									<input type="hidden" value="<?php echo $array[0]['price']; ?>" name="price">
									<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
								</a>
							</form>
						</figure>
						<figure>
							<img id="image" src="./resources/crocus-small-bulb-mix_1.jpg" title="Крокус">
								<br><a><?php echo $array[1]['name']?><form action="basket_func.php" method="post">
									Цена товара: <?php echo $array[1]['price']?> грн.<br/>
									Кол-во товара: <?php echo $array[1]['amount']?><br/>
									<input type="hidden" value="<?php echo $array[1]['id']; ?>" name="id">
									<input type="hidden" value="<?php echo $array[1]['name']; ?>" name="name">
									<input type="hidden" value="<?php echo $array[1]['amount']; ?>" name="amount">
									<input type="hidden" value="<?php echo $array[1]['price']; ?>" name="price">
									<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
								</a>
							</form>
						</figure>
						<figure>
							<img id="image" src="./resources/1334672296lilium_aziaat_mix.jpg" title="Лилия">
								<br><a><?php echo $array[2]['name']?><form action="basket_func.php" method="post">
									Цена товара: <?php echo $array[2]['price']?> грн.<br/>
									Кол-во товара: <?php echo $array[2]['amount']?><br/>
									<input type="hidden" value="<?php echo $array[2]['id']; ?>" name="id">
									<input type="hidden" value="<?php echo $array[2]['name']; ?>" name="name">
									<input type="hidden" value="<?php echo $array[2]['amount']; ?>" name="amount">
									<input type="hidden" value="<?php echo $array[2]['price']; ?>" name="price">
									<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
								</a>
							</form>
						</figure>
					</div>
					<div class="center">
						<figure>
							<img id="image" src="./resources/rose-excalibur-1_1.jpg" title="Роза Экскалибур">
							<br><a><?php echo $array[3]['name']?><form action="basket_func.php" method="post">
									Цена товара: <?php echo $array[3]['price']?> грн.<br/>
									Кол-во товара: <?php echo $array[3]['amount']?><br/>
									<input type="hidden" value="<?php echo $array[3]['id']; ?>" name="id">
									<input type="hidden" value="<?php echo $array[3]['name']; ?>" name="name">
									<input type="hidden" value="<?php echo $array[3]['amount']; ?>" name="amount">
									<input type="hidden" value="<?php echo $array[3]['price']; ?>" name="price">
									<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
							</a>
							</form>
						</figure>
						<figure>
							<img id="image" src="./resources/banan_oksamitoviy__175x133-25z84_.jpg" title="Бархатный банан">
								<br><a><?php echo $array[4]['name']?><form action="basket_func.php" method="post">
										Цена товара: <?php echo $array[4]['price']?> грн.<br/>
										Кол-во товара: <?php echo $array[4]['amount']?><br/>
										<input type="hidden" value="<?php echo $array[4]['id']; ?>" name="id">
										<input type="hidden" value="<?php echo $array[4]['name']; ?>" name="name">
										<input type="hidden" value="<?php echo $array[4]['amount']; ?>" name="amount">
										<input type="hidden" value="<?php echo $array[4]['price']; ?>" name="price">
										<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
									</a>
								</form>
							</figure>
						<figure>
							<img id="image" src="./resources/hippeastrum-rilona_2.jpg" title="Амарилис">
								<br><a><?php echo $array[5]['name']?><form action="basket_func.php" method="post">
										Цена товара: <?php echo $array[5]['price']?> грн.<br/>
										Кол-во товара: <?php echo $array[5]['amount']?><br/>
										<input type="hidden" value="<?php echo $array[5]['id']; ?>" name="id">
										<input type="hidden" value="<?php echo $array[5]['name']; ?>" name="name">
										<input type="hidden" value="<?php echo $array[5]['amount']; ?>" name="amount">
										<input type="hidden" value="<?php echo $array[5]['price']; ?>" name="price">
										<input name="item" type="submit" value="В корзину"><img id="basket" src="./resources/f02a62984db4.png">
								</a>
							</form>
						</figure>
						<figure class="smalcart">
								<strong>Товаров в корзине: <?php echo $_SESSION['basket']['goods'] ?></strong>
								<br/><strong>На сумму: <?php echo $_SESSION['basket']['total'] ?></strong>
								<br/><a href=''>Оформить заказ</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>