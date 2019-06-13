<?php
	function ft_split($var)
	{
		$my_arr = explode(" ", $var);
		$my_arr = array_filter($my_arr);
		$my_arr = array_values($my_arr);
		sort($my_arr);
		return($my_arr);
	}
?>