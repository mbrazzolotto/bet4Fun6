<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class TeamStat extends Team {

	var $nb; 
	var $percent;
	
	function getNb() {
		return $this->nb;
	}

	function setNb($nb) {
		$this->nb = (string)$nb;
	}

	function getPercent() {
		return $this->percent;
	}

	function setPercent($percent) {
		$this->percent = $percent;
	}

}
?>