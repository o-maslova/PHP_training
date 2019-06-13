<?php

Class Example {

	public static $nbInstances = 0;
	
	public static function doc() {
		print( self::$att . PHP_EOL );
		return 'This is a sample class with no real purpose.';
	}

	public function __construct() {
		print( 'Constructor called' . PHP_EOL );
		self::$nbInstances++;
		return ;
	}

	public function __destruct() {
		print( 'Destructor called' . PHP_EOL );
		self::$nbInstances--;
		print( 'nb instances: ' . Example::$nbInstances . PHP_EOL );
		return ;
	}
}

	print( 'nb instances: ' . Example::$nbInstances . PHP_EOL );
	$instance = new Example();
	print( 'nb instances: ' . Example::$nbInstances . PHP_EOL );
	$instance2 = new Example();
	print( 'nb instances: ' . Example::$nbInstances . PHP_EOL );
	$instance3 = new Example();
	print( 'nb instances: ' . Example::$nbInstances . PHP_EOL );

?>