#!/usr/bin/php
<?php
	if (!$argv[1])
		exit();
	$my_str = $argv[1];
	$my_str = trim($my_str, " \t");
	if ((strpos($my_str, "\t") == true) || (strpos($my_str, " ") == true))
	{
		while (strpos($my_str, "  ") == true)
			$my_str = str_replace('  ', ' ', $my_str);
		while (strpos($my_str, "\t") == true)
			$my_str = str_replace("\t", " ", $my_str);
	}
	echo "$my_str"."\n";
?>