<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\Table(name="bet")
 */
class Bet {

	 /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	var $id; // correspond à l'id du match

	 /**
	* @ORM\Column(type="integer")
	* @ORM\ManyToOne(targetEntity="App\Entity\User")
    */
	var $user;

	/**
    * @ORM\Column(type="integer")
    */
	var $team1;
	 
	/**
    * @ORM\Column(type="integer")
    */
 	var $team2;
	
	/**
    * @ORM\Column(type="integer")
    */ 
	var $score1;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $score2;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $pen1;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $pen2;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $type; // 0 : prono, 1 : integrale
	 
	/**
    * @ORM\Column(type="string")
    */
	var $modified;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $points;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $win;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $perfect;

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getUser() {
		return $this->user;
	}

	function setUser($user) {
		$this->user = (string)$user;
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

	function getModified() {
		return $this->modified;
	}

	function setModified($modified) {
		$this->modified = (string)$modified;
	}

	function getType() {
		return $this->type;
	}

	function setType($type) {
		$this->type = (string)$type;
	}


	function getPoints() {
		return $this->points;
	}

	function setPoints($points) {
		$this->points = (string)$points;
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

	function getWinner() {
		if ($this->getScore1()!="" && $this->getScore2()!="" && $this->getScore1()!=null && $this->getScore2()!=null) {
			if ($this->getScore1() > $this->getScore2()) {
				return $this->getTeam1();
			} else if ($this->getScore1() < $this->getScore2()) {
				return $this->getTeam2();
			} else if ($this->getPen1() > $this->getPen2()) {
				return $this->getTeam1();
			} else if ($this->getPen1() < $this->getPen2()) {
				return $this->getTeam2();
			} else {
				return $this->getTeam1();
			}
		} else {
			return new Team();
		}
	}
}
?>