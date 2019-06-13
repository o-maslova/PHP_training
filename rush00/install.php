<?php
	$host = 'localhost';
	$database = 'flowerstore';
	$username = 'root';
	$password = 'unit42';
	$conn = mysqli_connect($host, $username, $password);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "DROP DATABASE IF EXISTS $database";
	mysqli_query($conn, $sql);
	
	// Создаем БД
	$sql = "CREATE DATABASE IF NOT EXISTS $database";
	if (!mysqli_query($conn, $sql)) {
		die("Error creating database: " . mysqli_error($conn));
	}
	mysqli_close($conn);
	
	//Подключаемся к БД
	$conn = mysqli_connect($host, $username, $password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Создаем таблицу продуктов
	$sql = "CREATE TABLE IF NOT EXISTS flowerstore.flowers (
			`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(255) NOT NULL,
			`amount` INT(11) NOT NULL ,
			`price` INT(11) NOT NULL
		)";
	if (!mysqli_query($conn, $sql)) {
		die("Error creating products: " . mysqli_error($conn));
	}

	
	// Наполняем таблицу продуктов
	$sql =  "INSERT INTO flowers (`id`, `name`, `amount`, `price`)
	VALUES ('1', 'Гиацинт', '65', '100'),
			('2', 'Крокус', '50', '100'),
			('3', 'Лилия', '75', '120'),
			('4', 'Роза Экскалибур', '85', '150'),
			('5', 'Бархатный банан', '120', '40'),
			('6', 'Амарилис', '80', '70')";

	if (!mysqli_query($conn, $sql)) {
		die("Error filling products: " . mysqli_error($conn));
	}

	// Создаем таблицу юзеров и добавляем админа
	$sql = "CREATE TABLE IF NOT EXISTS flowerstore.users (
			`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
			`username` VARCHAR(255) NOT NULL,
			`password` TEXT NOT NULL,
			`isadmin` BOOLEAN NOT NULL,
			`email` VARCHAR(255),
			`address` VARCHAR(255)
			)";
	if (!mysqli_query($conn, $sql)) {
		die("Error creating users: " . mysqli_error($conn));
	}
	$adminPass = hash('whirlpool', 'unit42');
	$sql = "INSERT INTO users (`id`, `username`, `password`, `isadmin`)
		VALUES (1, `isadmin`, '" . $adminPass . "', true)";
	if (!mysqli_query($conn, $sql)) {
		die("Error filling users: " . mysqli_error($conn));
	}

	file_put_contents('shopdb.csv', "$username;$password;$database");
	mysqli_close($conn);
?>