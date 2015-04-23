<?php

class Line {

	private $lineValues = array();
	
	public function __construct($numbers) {
		foreach ($numbers as $key => $value) {
			$pos = ($value/10)-1;
			$this->lineValues[$pos] = new BoxNumber($value);
		}

		$count =0;
		for($i=0; $count<4 && $i<9;$i++){
			if(!isset($this->lineValues[$i])){
				$this->lineValues[$i] = new BoxBlankNumber();
				$count++;
			}
		}
	}

	public function isValid() {
		if(sizeof($this->lineValues) === 9){
			$returnValue = true;
			foreach ($this->lineValues as $key => $value) {
				if(!$value->isValid()){
					$returnValue = false;
				}
			}
			return $returnValue;
		}
		return false;
	}

}

?>