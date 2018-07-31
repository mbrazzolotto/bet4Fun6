<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="match")
 */

class Match {

	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	var $id; //auto_increment
	 
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $stage;
	
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $team1;
	 
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $team2;

	/**
    * @ORM\Column(type="string", length=100)
    */
	 var $begin;
	 
	 /**
    * @ORM\Column(type="integer", length=100)
    */
 	var $score1;
	 
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $score2;
	 
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $pen1;
	 
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $pen2;
	 
	
	//var $statut; // 0 : à venir, 1 : en cours, 2 : terminé
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $modified;

 	//var $extra;
	
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $tv; // 0 : non, 1 : TF1
	
	/**
    * @ORM\Column(type="integer", length=100)
    */
	var $live; // 1 : en cours


	function getTv() {
		return $this->tv;
	}

	function setTv($tv) {
		$this->tv = (string)$tv;
	}

	function getLive() {
		return $this->live;
	}

	function setLive($live) {
		$this->live = (string)$live;
	}

	function getModified() {
		return $this->modified;
	}

	function setModified($modified) {
		$this->modified = (string)$modified;
	}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getStage() {
		return $this->stage;
	}

	function setStage($stage) {
		$this->stage = $stage;
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

	function getBegin() {
		return $this->begin;
	}

	function setBegin($begin) {
		$this->begin = (string)$begin;
	}

	function getScore1() {
		return $this->score1;
	}

	function setScore1($score1) {
		$this->score1 = (string)$score1;
	}

	function getScore2() {
		return $this->score2;
	}

	function setScore2($score2) {
		$this->score2 = (string)$score2;
	}


	function getPen1() {
		return $this->pen1;
	}

	function setPen1($pen1) {
		$this->pen1 = (string)$pen1;
	}

	function getPen2() {
		return $this->pen2;
	}

	function setPen2($pen2) {
		$this->pen2 = (string)$pen2;
	}


	function getStatut() {
		return $this->statut;
	}

	function setStatut($statut) {
		$this->statut = (string)$statut;
	}

	/*function getExtra() {
		return $this->extra;
	}

	function setExtra($extra) {
		$this->extra = $extra;
	}*/

	function getWinner() {
		if ($this->getScore1()>$this->getScore2()) {
			return $this->getTeam1();
		} else if ($this->getScore1()<$this->getScore2()) {
			return $this->getTeam2();
		} else if ($this->getPen1()>$this->getPen2()) {
			return $this->getTeam1();
		} else if ($this->getPen1()<$this->getPen2()) {
			return $this->getTeam2();
		} else {
			return $this->getTeam1();
		}
	}
	
}
?>