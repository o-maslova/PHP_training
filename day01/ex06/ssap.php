#!/usr/bin/php
<?php
	$i = 1;
	if (!$argv[$i])
		exit();
	$my_arr = array();
	while ($argv[$i])
	{
		if (strpos($argv[$i], ' ') == true)
		{
			$tmp = explode(' ', $argv[$i]);
			$my_arr = array_merge($my_arr, $tmp);
		}
		else
			array_push($my_arr, $argv[$i]);
		$i++;
	}
	sort($my_arr);
	$my_arr = array_filter($my_arr);
	foreach ($my_arr as $elem)
		echo "$elem"."\n";
?>