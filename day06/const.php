<?php
	Class Example {
		const CST1 = 1;
		const CST2 = 2;

		public function __construct( array $kwargs ) {
			
			print( 'Constructor called' . PHP_EOL );

			if ( $kwargs['arg'] == self::CST1 )
				print( 'arg is CST1' . PHP_EOL );
			else if ( $kwargs['arg'] == self::CST2 )
				print( 'arg is CST2' . PHP_EOL );
			else
				print( 'arg is not a class constant' . PHP_EOL );
			return;
		}

		public function destruct() {
			print( 'Destructor called' . PHP_EOL );
			return ;
		}
	}

	$instance = new Example( array( 'arg' => Example::CST1 ) );
	$instance = new Example( array( 'arg' => Example::CST2 ) );
	$instance = new Example( array( 'arg' => 42 ) );
?>

