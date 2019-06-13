<?php

require_once 'Color.class.php';

class Vertex {
	private $_x = 0.00;
	private $_y = 0.00;
	private $_z = 0.00;
	private $_w = 1.0;
	private $_color;
	static $verbose = false;

	public function __construct( array $kwargs ) {
		if ( array_key_exists( 'x', $kwargs) && array_key_exists( 'y', $kwargs)
		&& array_key_exists( 'z', $kwargs) ) {
			$this->_x = $kwargs['x'];
			$this->_y = $kwargs['y'];
			$this->_z = $kwargs['z'];
			if ( array_key_exists( 'w', $kwargs ) ) 
				$this->_w = (float)$kwargs['w'];
			if ( array_key_exists( 'color', $kwargs ) )
				$this->_color = $kwargs['color'];
			else
				$this->_color = new Color( array('rgb' => 0xFFFFFF));
				
		}
		if (self::$verbose)
			printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s) constructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		return ;
	}
	public function __destruct() {
		if (self::$verbose) {
			printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s) destructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}
		return ;
	}
	public function __toString() {
		if (self::$verbose)
			return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f)", $this->_x, $this->_y, $this->_z, $this->_w);
		else
			return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f)", $this->_x, $this->_y, $this->_z, $this->_w);
	}
	public static function doc() {
		$file = fopen("./Vertex.doc.txt", "r");
		while ($file && !feof($file))
			echo fgets($file);
		echo "\n";
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getCol() { return $this->_color; }

	public function setX( $x ) { $this->_x = $x; return ; }
	public function setY( $y ) { $this->_y = $y; return ; }
	public function setZ( $z ) { $this->_z = $z; return ; }
	public function setW( $w ) { $this->_w = $w; return ; }
	public function setCol( $color ) { $this->_color = $color; return ; }
}