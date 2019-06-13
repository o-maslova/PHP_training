<?php
	if ($_POST["submit"] == "Yes")
		header("Location: ./create.html");
	if ($_POST["submit"] == "No")
		header("Location: ./../");
?>
<html>
	<head>
		<title>Fail login</title>
	</head>
	<body>
		<form action="fail.php" method="post">
			<h1>Sorry, it seams like you have not a profile yet.</h1>
			<h2>Do you want to register?</h2>
			<input type="submit" name="submit" value = "Yes">
			<input type="submit" name="submit" value = "No">
		</form>
	</body>
</html>