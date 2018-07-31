<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Token {

	var $id; 
 	var $token;

	public function __construct($id, $token)
	{
		$this->id = $id;
		$this->token = $token;
	}
	
	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getToken() {
		return $this->token;
	}

	function setToken($token) {
		$this->token = (string)$token;
	}

}
?>