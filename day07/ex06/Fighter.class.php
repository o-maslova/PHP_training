<?php
	class Fighter {

		private $_soldier;

		public function __construct( $tmp ) {
			$this->_soldier = $tmp;
		}
		public function getSoldier() { return $this->_soldier; }
	}
?>