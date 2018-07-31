<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class FiltreMatch {

 	var $stage;
	var $contest; 
	var $nb;
	var $type; // next or previous
	
	function getContest() {
		return $this->contest;
	}

	function setContest($contest) {
		$this->contest = $contest;
	}	

	function getStage() {
		return $this->stage;
	}

	function setStage($stage) {
		$this->stage = $stage;
	}

	function getNb() {
		return $this->nb;
	}

	function setNb($nb) {
		$this->nb = $nb;
	}
	
	function getType() {
		return $this->type;
	}

	function setType($type) {
		$this->type = (string)$type;
	}
	
}
?>