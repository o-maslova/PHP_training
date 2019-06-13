#!/usr/bin/php
<?php
	if (!$argv[1])
		exit();
	function month ($mon, $year)
	{
		$k = 0;
		while ($mon > 1)
		{
			if ($mon == 2 && $year % 4 != 0)
				$k += 28;
			elseif ($mon == 2 && $year % 4 == 0)
				$k += 29;
			elseif ($mon % 2 == 0 && $mon != 8)
				$k += 30;
			else
				$k += 31;
			$mon--;
		}
		return ($k);
	}
	function year ($year)
	{
		$k = 0;
		while ($year > 1970)
		{
			if ($year % 4 == 0)
				$k += 1;
			$k += 365;
			$year -= 1;
		}
		return ($k);
	}
	function error ()
	{
		echo "Wrong Format\n";
		exit();
	}
	$str = strtolower($argv[1]);
	$arr = explode(" ", $str);
	$day_of_week = array(1 => "lundi", "mardi", "mercedi", "jeudi", "vendredi", "somedi", "dimanche");
	$month = array(1 => "janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$i = 0;
	if ($i = array_search($arr[2], $month) == 0 || $arr[3] < 1970 ||
		$arr[1] < 0 || $arr[1] > 31 || !array_search($arr[0], $day_of_week))
		error();
	$i = month($i, $arr[3]);
	$i += year($arr[3]);
	$i += $arr[1] - 1;
	$i *= 86400;
	$hours = explode(":", $arr[4]);
	if ($hours[0] > 24 || $hours[1] > 60 || $hours[2] > 60)
		error();
	foreach ($hours as $elem)
		if ($elem < 0)
			error();
	$hours[0] = $hours[0] > 0 ? ($hours[0] - 1) * 3600 : 0;
	$hours[1] = $hours[1] > 0 ? $hours[1] * 60 : 0;
	$i += $hours[0] + $hours[1] + $hours[2];
	echo "$i"."\n";
?>