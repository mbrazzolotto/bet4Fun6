<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Stat {

	var $nb;
	var $teams;
	var $team1;
	var $team2;
	var $nbNul;
	var $percentNul;
	
	function getNb() {
		return $this->nb;
	}

	function calcNbNul() {
		$this->nbNul = $this->nb-$this->team1->getNb()-$this->team2->getNb();
		$this->percentNul = 100-$this->team1->getPercent()-$this->team2->getPercent();
	}

	function setNb($nb) {
		$this->nb = (string)$nb;
	}

	function getTeams() {
		return $this->teams;
	}

	function setTeams($teams) {
		$this->teams = $teams;
	}

	function getTeam1() {
		return $this->team1;
	}

	function setTeam1($team1) {
		$this->team1 = $team1;
	}

	function getTeam2() {
		return $this->team2;
	}

	function setTeam2($team2) {
		$this->team2 = $team2;
	}


}
?>