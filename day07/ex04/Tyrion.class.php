<?php
	class Tyrion extends Lannister {
		public function sleepWith( $var ) {
			if ($var instanceof Lannister)
				print( 'Not even if I\'m drunk ! ' . PHP_EOL );
			if ($var instanceof Stark)
				print ( 'Let\'s do this. ' . PHP_EOL );
			return ;
		}
	}
?>