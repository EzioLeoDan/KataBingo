<?php

include "BoxNumber.php";
include "Line.php";

class BingoTest extends PHPUNIT_Framework_TestCase {
	
	public function testNumberIsValid() {
		$box = new BoxNumber(1);
		$this->assertEquals($box->isValid(), true);
	}

	public function testNumberIsNotValid() {
		$box = new BoxNumber(100);
		$this->assertEquals($box->isValid(), false);
	}

	public function testNumberIsMarked() {
		$box = new BoxNumber(40);
		$box->markValue(40);
		$this->assertEquals($box->isMarked(), true);
	}

	public function testNumberIsNotMarked() {
		$box = new BoxNumber(2);
		$box->markValue(3);
		$this->assertEquals($box->isMarked(), false);
	}

	public function testLineIsValid() {
		$line = new Line(array(1,21,32,44,56));
		$this->assertEquals($line->isValid(), true);
	}

	public function testLineIsNotValid() {
		$line = new Line(array(1));
		$this->assertEquals($line->isValid(), false);
	}

}

?>