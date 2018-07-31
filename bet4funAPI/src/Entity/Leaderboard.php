<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Leaderboard {

	var $rank;
 	var $team; 
 	var $bp;
 	var $bc;
 	var $diff;
 	var $points;

 	public function Leaderboard() {
 		$this->bp=0;
 		$this->bc=0;
 		$this->diff=0;
 		$this->points=0;
 	}

	function getTeam() {
		return $this->team;
	}

	function setTeam($team) {
		$this->team = $team;
	}

	function getRank() {
		return $this->rank;
	}

	function setRank($rank) {
		$this->rank = $rank;
	}

	function getBp() {
		return $this->bp;
	}

	function setBp($bp) {
		$this->bp = $bp;
	}

	function getBc() {
		return $this->bc;
	}

	function setBc($bc) {
		$this->bc = $bc;
	}

	function getDiff() {
		return $this->diff;
	}

	function setDiff($diff) {
		$this->diff = $diff;
	}

	function getPoints() {
		return $this->points;
	}

	function setPoints($points) {
		$this->points = $points;
	}

}
?>