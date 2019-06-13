<?php
	Class Example {

		private $_att = 0;

		public function getAtt() { return $this->_att; }

		public function setAtt( $v ) { 
			if ( $this->_att + $v > 50 )
				$this->_att = 50;
			else
				$this->_att = $v;
			return ;
		}

		public function __get( $att ) {
			print( 'Attempt to access \'' . $att . '\' attribute, this script should die' . PHP_EOL );
			return 'arrrg';
		}

		public function __set( $att, $value ) {
			print( 'Attempt to set \'' . $att . '\' attribute to \'' . $value . '\', this script should die' . PHP_EOL );
			return ;
		}

		public function __constructor( array $kwargs ) {
			print( 'Constructor called'. PHP_EOL);
			$this->setAtt( $kwargs['arg'] );
			print( '$this->getAtt(): ' . $this->getAtt() . PHP_EOL );
			return ;
		}
	}
?>