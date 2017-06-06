<?php

/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 31.05.17
 * Time: 17:53
 */
use Personen\Human;

class Motorrad {

	public $marke;
	public $fahrer;

	public function __construct($marke){
		$this->setMarke($marke);
	}

	public function setMarke($marke){
		$this->marke = $marke;
	}

	public function getMarke(){
		return $this->marke;
	}
}