<?php

Class Example {

	public function __construct() {
		print( 'Constructor called' . PHP_EOL );
		return ;
	}

	public function __destruct() {
		print( 'Destructor called' . PHP_EOL );
		return ;
	}
	
	public function __call( $f, $args ) {
		print( 'Attempt to call function \'' . $f . '\' with params ' );
		print_r( $args );
		return ;
	}

	public static function __callstatic ( $f, $args ){
		print( 'Attempt to call static function \'' . $f . '\' with params ' );
		print_r( $args );
		return ;
	}
}

	$instance = new Example();
	$instance->foo( 1,2,3 );
	Example::bar( 4,5,6 );

?>