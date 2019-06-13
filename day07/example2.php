<?php
	class ExampleA {

		public		$publicAtt = 21;
		protected	$_protectedAtt = 84;
		private		$_privateAtt = 42;

		public function __construct() {
			print( 'Constructor ExempleA called' . PHP_EOL );
			return ;
		}
		public function __destruct() {
			print( 'Destructor ExampleA called' . PHP_EOL );
			return ;
		}
		public function publicFoo() {
			print( 'Function publicFoo from class A' . PHP_EOL );
			return ;
		}
		protected function _protectedFoo() {
			print( 'Function _protectedFoo from class A' . PHP_EOL );
			return ;
		}
		protected function _privateFoo() {
			print( 'Function _privateFoo from class A' . PHP_EOL );
			return ;
		}
		public function test() {
			print( '$this->publicAtt is ' . $this->publicAtt . PHP_EOL );
			print( '$this->_protectedAtt is '. $this->_protectedAtt .PHP_EOL );
			print( '$this->_privateAtt is ' . $this->_privateAtt .PHP_EOL );
			$this->publicFoo();
			$this->_protectedFoo();
			$this->_privateFoo();
			return ;
		}
	}
		class ExampleB extends ExampleA {
			public function __construct() {
				// parent::__construct();
				print( 'Constructor ExampleB called' . PHP_EOL );
				return ;
			}
			public function __destruct() {
				print( 'Destructor ExampleA called' . PHP_EOL );
				return ;
			}
			public function test() {
				print( '$this->publicAtt is ' . $this->publicAtt . PHP_EOL );
				print( '$this->_protectedAtt is '. $this->_protectedAtt .PHP_EOL );
				$this->publicFoo();
				$this->_protectedFoo();
				return ;
			}
		}

		print( '---- From inside A ----' . PHP_EOL );
		$instanceA = new ExampleA();
		$instanceA->test();
		
		print( '---- From inside B ----' . PHP_EOL );
		$instanceB = new ExampleB();
		$instanceB->test();

		print( '---- From outside  ----' . PHP_EOL );
		print( '$instanceB->publicAtt is ' . $instanceB->publicAtt . PHP_EOL );
		$instanceB->publicFoo();

		print( '---- End           ----' . PHP_EOL );
?>