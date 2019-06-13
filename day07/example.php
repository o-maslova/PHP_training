<?php
	class ExampleA {
		public function __construct() {
			print( 'Constructor ExempleA called' . PHP_EOL );
			return ;
		}
		public function __destruct() {
			print( 'Destructor ExampleA called' . PHP_EOL );
			return ;
		}
		public function foo() {
			print( 'Function foo from class A' . PHP_EOL );
			return ;
		}
	}

	class ExampleB extends ExampleA {
		public function __construct() {
			parent::__construct();
			print( 'Constructor ExempleB called' . PHP_EOL );
			return ;
		}
		public function __destruct() {
			print( 'Destructor ExampleB called' . PHP_EOL );
			parent::__destruct();
			return ;
		}
	}
	$instance = new ExampleA();
	// $instance->foo();
	$instance = new ExampleB();
	// $instance->foo();
?>