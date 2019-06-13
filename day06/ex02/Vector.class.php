<?php

require_once 'Vertex.class.php';
require_once 'Color.class.php';

class Vector {
	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 0;
	private $_color;
	static $verbose = false;

	public function __construct( array $kwargs ) {
		if ( isset($kwargs['dest'] ) ) {
			if ( isset($kwargs['orig'] ) ) {
				$_orig = new Vertex( array('x' => $kwargs['orig']->getX(), 'y' => $kwargs['orig']->getY(), 'z' => $kwargs['orig']->getZ()));
			}
			else {
				$_orig = new Vertex( array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
			}
			$this->_x = $kwargs['dest']->getX() - $_orig->getX();
			$this->_y = $kwargs['dest']->getY() - $_orig->getY();
			$this->_z = $kwargs['dest']->getZ() - $_orig->getZ();
		}
		if (self::$verbose)
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f) constructed.\n", $this->_x, $this->_y, $this->_z, $this->_w);
		return ;
	}
	public function __toString() {
		if (self::$verbose)
			return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f)", $this->_x, $this->_y, $this->_z, $this->_w);
		else
			return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f)", $this->_x, $this->_y, $this->_z, $this->_w);
	}
	public function __destruct() {
		if (self::$verbose) {
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f, %s) destructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}
		return ;
	}
	public static function doc() {
		$file = fopen("./Vector.doc.txt", "r");
		while ($file && !feof($file))
			echo fgets($file);
		echo "\n";
	}
	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getCol() { return $this->_color; }

	public function magnitude() {
		return (float)sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
	}
	public function normalize() {
		$tmp = $this->magnitude();
		if ($tmp == 1)
			return clone $this;
		return new Vector( array('dest' => new Vertex( array('x' => $this->_x / $tmp,
		'y' => $this->_y / $tmp, 'z' => $this->_z / $tmp))));
	}
	public function add( Vector $rhs ) {
		return new Vector( array('dest' => new Vertex( array('x' => $this->_x + $rhs->_x,
		'y' => $this->_y + $rhs->_y, 'z' => $this->_z + $rhs->_z))));
	}
	public function sub( Vector $rhs ) {
		return new Vector( array('dest' => new Vertex( array('x' => $this->_x - $rhs->_x,
		'y' => $this->_y - $rhs->_y, 'z' => $this->_z - $rhs->_z))));
	}
	public function opposite() {
		return new Vector( array('dest' => new Vertex( array('x' => $this->_x * -1,
		'y' => $this->_y * -1, 'z' => $this->_z * -1))));
	}
	public function scalarProduct( $k ) {
		return new Vector( array('dest' => new Vertex( array('x' => $this->_x * $k,
		'y' => $this->_y * $k, 'z' => $this->_z * $k))));
	}
	public function dotProduct( Vector $rhs ) {
		return (float)(($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z));
	}
	public function cos( Vector $rhs ) {
		return ((($this->_x * $rhs->_x) + ($this->_y * $rhs->_y) + ($this->_z * $rhs->_z)) / sqrt((($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)) * (($rhs->_x * $rhs->_x) + ($rhs->_y * $rhs->_y) + ($rhs->_z * $rhs->_z))));
	}
	public function crossProduct( Vector $rhs ) {
		return new Vector( array('dest' => new Vertex( array(
		'x' => $this->_y * $rhs->getZ() - $this->_z * $rhs->getY(),
		'y' => $this->_z * $rhs->getX() - $this->_x * $rhs->getZ(),
		'z' => $this->_x * $rhs->getY() - $this->_y * $rhs->getX()))));
	}
}