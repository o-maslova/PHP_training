#!/usr/bin/php
<?php
	if (!$argv[1])
		exit();
	function up ($str) {
		return (strtoupper($str));
	}
	$i = 0;
	if (($content = file_get_contents($argv[1])) == true)
	{
		preg_match_all("/(<a.*title=)(\".*\")(.*>.*<\/a>)/i",  $content, $arr);
		// $split = preg_split('/<a[^>]*[^\/]>/', $content, -1, PREG_SPLIT_NO_EMPTY);
		// preg_match_all("/(<a[^<])*>([^<]*<)/", $content, $split);
		preg_match_all("/<a[^>]*>([^<].*?[<])/i", $content, $split);
		// if (($i = strpos($content, "<a ")) == true)
		// {
		// 	$str = $content[$i];
		// 	$content = preg_replace_callback('|href=https?://.*>|', "up", $content);
		// 	// $content = substr($content, )
		// }
		// var_dump($split);
		// print_r($split);
			print_r($split);
	}
	
?>

