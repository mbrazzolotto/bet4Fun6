<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class UserDesc {

	/**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	var $id; //auto_increment

 	/**
    * @ORM\Column(type="string", length=100)
    */
 	var $name;
	 
	 /**
    * @ORM\Column(type="string", length=100)
    */
	var $firstname;
	 
	 /**
    * @ORM\Column(type="string", length=100)
    */
	var $login;
	 
	
	//var $gravatar;
	 
	/**
    * @ORM\Column(type="integer")
    */
	var $predictor;

 	function getPredictor() {
 		return $this->predictor;
 	}

	function setPredictor($predictor) {
		$this->predictor = (string)$predictor;
	}
	
	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = (string)$name;
	}

	function getFirstname() {
		return $this->firstname;
	}

	function setFirstname($firstname) {
		$this->firstname = (string)$firstname;
	}

	function getLogin() {
		return $this->login;
	}

	function setLogin($login) {
		$this->login = (string)$login;
	}

	function getGravatar($gravatar) {
		return $this->gravatar;
	}

	function setGravatar($email) {
		$this->gravatar = md5( strtolower( trim( $email ) ) );
	}
	
}
?>