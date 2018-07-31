<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bonus")
 */

class Bonus {


	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	var $id;

	/**
	* @ORM\Column(type="integer")
	* @ORM\ManyToOne(targetEntity="App\Entity\User")
	* 
    */
	var $user;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $stage;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $type;

 	var $points;


	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getUser():?USer {
		return $this->user;
	}

	function setUser($user) {
		$this->user = (string)$user;
	}

	function getStage() {
		return $this->stage;
	}

	function setStage($stage) {
		$this->stage = (string)$stage;
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

}
?>