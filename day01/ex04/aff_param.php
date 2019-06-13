#!/usr/bin/php
<?php
	$my_arr = array();
	$i = 0;
	foreach ($argv as $my_arr[$i])
		$i++;
	array_shift($my_arr);
	foreach ($my_arr as $elem)
		echo "$elem"."\n";
?>