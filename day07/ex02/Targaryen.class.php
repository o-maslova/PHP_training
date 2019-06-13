<?php
	class Targaryen {
		public function resistsFire() {
			return false;
		}
		public function getBurned() {
			if ($this->resistsFire())
				return "emerge naked but unharmed";
			else
				return "burns alive";
		}
	}
?>