<?php
	class Color {

		public $red = 0;
		public $green = 0;
		public $blue = 0;
		public $rgb = 0;
		static $verbose = false;

		public function __construct( array $kwargs ) {
			if ( array_key_exists( 'rgb', $kwargs )) {
				$this->rgb = (int)$kwargs['rgb'];
				$tmp = 0x0000FF;
				$this->blue = $this->rgb & $tmp;
				$tmp = $tmp << 8;
				$this->green = ($this->rgb & $tmp) >> 8;
				$tmp = $tmp << 8;
				$this->red = ($this->rgb & $tmp) >> 16;
			}
			else if ( array_key_exists( 'red', $kwargs ) ) {
				$this->red = (int)$kwargs['red'];
			if ( array_key_exists( 'green', $kwargs ) )
				$this->green = (int)$kwargs['green'];
			if ( array_key_exists( 'blue', $kwargs ) ) 
				$this->blue = (int)$kwargs['blue'];
			}
			if ($this->red < 0 || $this->red > 255)
				$this->red = 0;
			if ($this->green < 0 || $this->green > 255)
				$this->green = 0;
			if ($this->blue < 0 || $this->blue > 255)
				$this->blue = 0;
			if (self::$verbose) 
				print( 'Color( red: '.$this->red.', green: '.$this->green.', blue: '.$this->blue.' ) constructed.'.PHP_EOL);
			return ;
		}
		public function __destruct() {
			if (self::$verbose) {
				print( 'Color( red: '.$this->red.', green: '.$this->green.', blue: '.$this->blue.' ) destructed.'.PHP_EOL);
			}
			return ;
		}
		public function __toString() {
			return 'Color( red: '.$this->red.', green: '.$this->green.', blue: '.$this->blue.' )';
		}
		public static function doc() {
			$file = fopen("./Color.doc.txt", "r");
			while ($file && !feof($file))
				echo fgets($file);
			echo "\n";
		}
		public function add( $rhs ) {
			return new Color( array(
			'red' => $this->red + $rhs->red, 
			'green' => $this->green + $rhs->green,
			'blue' => $this->blue + $rhs->blue) );
		}
		public function sub( $rhs ) {
			return new Color( array(
			'red' => $this->red - $rhs->red, 
			'green' => $this->green - $rhs->green,
			'blue' => $this->blue - $rhs->blue) );
		}
		public function mult( $f ) {
			return new Color( array(
			'red' => $this->red * $rhs->red, 
			'green' => $this->green * $rhs->green,
			'blue' => $this->blue * $rhs->blue) );
		}
	}
?>