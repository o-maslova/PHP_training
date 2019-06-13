<?php
	function ft_is_sort($var)
	{
		$tmp_1 = $var;
		$tmp_2 = $tmp_1;
		sort($tmp_1);
		rsort($tmp_2);
		if ($tmp_1 == $var || $tmp_2 == $var)
			return (true);
		else
			return (false);
	}
?>