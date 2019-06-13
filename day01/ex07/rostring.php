#!/usr/bin/php
<?php
	$i = 1;
	if (!$argv[$i])
		exit();
	if (strpos($argv[$i], ' ') == true)
	{
		$my_arr = explode(" ", $argv[$i]);
		$my_arr = array_filter($my_arr);
		$tmp = $my_arr[0];
		array_shift($my_arr);
		array_push($my_arr, $tmp);
		foreach ($my_arr as $elem)
			echo "$elem"." ";
	}
	else
		print($argv[1]);
?>