#!/usr/bin/php
<?php
	if (!$argv[1])
		exit();
	$my_str = $argv[1];
	$my_str = trim($my_str);
	while (strpos($my_str, '  ') == true)
	{
		$my_str = str_replace('  ', ' ', $my_str);
	}
	printf($my_str."\n");
?>