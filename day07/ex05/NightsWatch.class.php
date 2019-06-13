<?php
	class NightsWatch implements IFighter {
		public $_fighters = array();
		public function recruit( $person ) {
			if (method_exists($person, 'fight')) {
				array_push($this->_fighters, $person);
			}
		}
		public function fight() {
			foreach ($this->_fighters as $elem) {
				$elem->fight();
			}
		}
	}
?>