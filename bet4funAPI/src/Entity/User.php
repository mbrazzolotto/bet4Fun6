<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends UserDesc {

 	var $token;
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $email;
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $nbconnexion;
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $lastconnexion;
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $state; // 0 : visible, 1 : invisible
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $role; // 0 : utilisateur, 1 : admin
	 
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $creation;
	 
	var $origine;
	
	/**
    * @ORM\Column(type="string", length=100)
    */
	var $newsletter;

	function getOrigine() {
		return $this->origine;
	}

	function setOrigine($origine) {
		$this->origine = (string)$origine;
	}

	function getToken() {
		return $this->token;
	}

	function setToken($token) {
		$this->token = (string)$token;
	}

	function getEmail() {
		return $this->email;
	}

	function setEmail($email) {
		$this->email = (string)$email;
	}

	function getNbconnexion() {
		return $this->nbconnexion;
	}

	function setNbconnexion($nbconnexion) {
		$this->nbconnexion = (string)$nbconnexion;
	}

	function getLastconnexion() {
		return $this->lastconnexion;
	}

	function setLastconnexion($lastconnexion) {
		$this->lastconnexion = (string)$lastconnexion;
	}

	function getState() {
		return $this->state;
	}

	function setState($state) {
		$this->state = (string)$state;
	}

	function getRole() {
		return $this->role;
	}

	function setRole($role) {
		$this->role = (string)$role;
	}

	function getCreation() {
		return $this->creation;
	}

	function setCreation($creation) {
		$this->creation = (string)$creation;
	}

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
    }



}
?>