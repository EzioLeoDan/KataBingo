<?php

class BoxNumber {

	private $marked;
	private $value;

	public function __construct($number) {
		$this->value=$number;
		$this->marked = false;
	}

	public function isValid() {
		return ($this->value > 0 && $this->value <= 90);
	}

	public function isMarked() {
		return $this->marked;
	}

	public function markValue($number){
		$this->marked = ($number === $this->value);
	}
	
}

class BoxBlankNumber {

	private $marked;

	public function __construct() {
		$this->marked = true;
	}

	public function isValid() {
		return true;
	}

	public function isMarked() {
		return $this->marked;
	}
	
}


?>