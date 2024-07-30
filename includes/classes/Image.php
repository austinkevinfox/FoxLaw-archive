<?php
/* Filename: Image.php
 * Short Description: Image class
 * Long Description: 
 **************************************************************************
 * Change Log
 **************************************************************************
 * @00 : 2012-03-13 : Kevin Fox : Original development
 **************************************************************************
*/


class Image {
	const DIR = 'images';
	
	protected $class;
	protected $description;
	protected $id;
	protected $height;
	protected $src;
	protected $width;

	public function __construct($id=0, $src='', $descr='') {
		$this->id = $id;
		$this->src = $src;
		$this->description = $descr;
	}
	
	public function addClass($value) {
		$this->class .= " $value";
		$this->class = trim($this->class);
	}
	
	/************** Getter functions **************/
	public function getClass() {
		return $this->class;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getHeight() {
		return $this->height;
	}
	
	public function getSrc() {
		return $this->src;
	}
	
	public function getWidth() {
		return $this->width;
	}
	
	
	/************** Boolean functions **************/
	public function hasClass($value) {
		return preg_match("/$value/", $this->class);
	}
	
	/************** Setter functions **************/
	public function setClass($value) {
		$this->class = $value;
	}
	
	public function setDescription($value) {
		$this->description = $value;
	}
	
	public function setId($value) {
		$this->id = $value;
	}
	
	public function setHeight($value) {
		$this->height = $value;
	}
	
	public function setSrc($value) {
		$this->src = $value;
	}
	
	public function setWidth($value) {
		$this->width = $value;
	}
}

?>