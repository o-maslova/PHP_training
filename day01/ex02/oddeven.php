#!/usr/bin/php
<?php
	$line = ' ';
	while (feof(STDIN) == TRUE)
	{
		echo "Enter a number: ";
		$line = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
		{
			echo "\n";
			exit();
		}
		if (!is_numeric($line))
		{
			echo "$line is not a number\n";
		}
		elseif ($line % 2)
		{
			echo "The number $line is odd\n";
		}
		else
		{
			echo "The number $line is even\n";
		}
	}
?>