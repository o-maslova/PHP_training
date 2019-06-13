#!/usr/bin/php
<?php
	$i = 1;
	if (!$argv[$i])
		exit();
	$my_arr = array();
	function def ($a)
	{
		$k = 0;
		if ($a >= 65 && $a <= 90)
			$k = 1;
		elseif ($a >= 48 && $a <= 57)
			$k = 2;
		elseif ($a >= 97 && $a <= 122)
			$k = 3;
		else
			$k = 4;
		return ($k);
	}
	function cmp ($a, $b)
	{
		$i = 0;
		$tmp_1 = str_split($a);
		$tmp_2 = str_split($b);
		while (1)
		{
			// print($tmp_1[$i]." ");
			// print($tmp_2[$i]." ");
			if (def($tmp_1[$i]) > def($tmp_2[$i]))
				return (true);
			elseif (def($tmp_1[$i]) == def($tmp_2[$i]))
			{
				if ($tmp_1[$i] < $tmp_2[$i])
					return (false);
				elseif ($tmp_1[$i] > $tmp_2[$i])
					return (true);
				$i++;
				
			}
			else
				return (false);
		}
	}
	function my_sort($var)
	{
		$k = 0;
		// print_r($var);
		$num = array();
		$nans = array();
		while ($var[$k])
		{
			print($var[$k]." ");
			if (is_numeric($var[$k]))
			{
				array_push($num, $var[$k]);
				unset($var[$k]);
			}
			// elseif (is_string($var[$k]))
			// {
			// 	array_push($nans, $var[$k]);
			// 	unset($var[$k]);
			// }
			$k++;
		}
		sort($num);
		print_r($num);
		usort($var, "cmp");
		// sort($nans);
		print_r($var);
		// sort($var);
		array_merge($var, $num, $nans);
		return($var);
	}
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
	usort($my_arr, "cmp");
	$my_arr = my_sort($my_arr);
	// $my_arr = array_filter($my_arr);
	foreach ($my_arr as $elem)
		echo "$elem"."\n";
?>