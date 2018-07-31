<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Message {

 	var $fr;
 	var $en;	

	public function __construct($fr, $en)
	{
		$this->fr = $fr;
		$this->en = $en;
	}

	function getFr() {
		return $this->fr;
	}
	function getEn() {
		return $this->en;
	}

	

}
?>