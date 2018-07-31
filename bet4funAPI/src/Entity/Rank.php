<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Rank {

	var $rank;
 	var $user; 
 	var $nb;
 	var $bet;
 	var $points;
 	var $win;
 	var $perfect;
 	var $bonus;

	function getUser() {
		return $this->user;
	}

	function setUser($user) {
		$this->user = $user;
	}

	function getRank() {
		return $this->rank;
	}

	function setRank($rank) {
		$this->rank = $rank;
	}

	function getNb() {
		return $this->nb;
	}

	function setNb($nb) {
		$this->nb = $nb;
	}

	function getBet() {
		return $this->bet;
	}

	function setBet($bet) {
		$this->bet = $bet;
	}

	function getPoints() {
		return $this->points;
	}

	function setPoints($points) {
		$this->points = $points;
	}

	function getPerfect() {
		return $this->perfect;
	}

	function setPerfect($perfect) {
		$this->perfect = (string)$perfect;
	}	

	function getWin() {
		return $this->win;
	}

	function setWin($win) {
		$this->win = (string)$win;
	}

	function getBonus() {
		return $this->bonus;
	}

	function setBonus($bonus) {
		$this->bonus = (string)$bonus;
	}
}
?>