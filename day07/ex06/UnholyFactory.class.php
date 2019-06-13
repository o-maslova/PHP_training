<?php
	
	class UnholyFactory {
		
		private $_army = array();

		public function absorb( $tmp ) {
			if (array_search($tmp, $this->_army) && $tmp instanceof Fighter)
				print( '(Factory already absorbed a fighter of type '.$tmp->getSoldier().')'.PHP_EOL );
			else if ($tmp instanceof Fighter) {
				print( '(Factory absorbed a fighter of type '.$tmp->getSoldier().')'.PHP_EOL );
				$this->_army[$tmp->getSoldier()] = $tmp;
			}
			else {
				print( '(Factory can\'t absorb this, it\'s not a fighter)'.PHP_EOL );
			}
		}
		public function fabricate( $tmp ) {
			if (isset($this->_army[$tmp])) {
				print( '(Factory fabricates a fighter of type '.$tmp.')'.PHP_EOL );
				return $this->_army[$tmp];
			}
			else {
				print( '(Factory hasn\'t absorbed any fighter of type '.$tmp.')'.PHP_EOL );
			}
		}
	}
?>