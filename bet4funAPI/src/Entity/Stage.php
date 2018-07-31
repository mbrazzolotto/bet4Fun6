<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stage")
 */
class Stage {

	 /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
	var $id; //auto_increment

	 /**
    * @ORM\Column(type="integer", length=100)
    */
	 var $contest;
	 
	  /**
    * @ORM\Column(type="string", length=100)
    */
	 var $name;
	 
	  /**
    * @ORM\Column(type="string", length=100)
    */
	 var $nom;
	 
	  /**
    * @ORM\Column(type="integer", length=100)
    */
 	var $statut; // 0 : invisible, 1 : à venir, 2 : en cours, 3 : terminé
	 
	 /**
    * @ORM\Column(type="integer", length=100)
    */
	var $type; // 0 : championnat avec classement, 1 : journée de championnat, 2 : coupe
	 
	 /**
    * @ORM\Column(type="string", length=100)
    */
	var $modified;

	function getModified() {
		return $this->modified;
	}

	function setModified($modified) {
		$this->modified = (string)$modified;
	}
	
 	function getNom() {
		return $this->nom;
	}

	function setNom($nom) {
		$this->nom = (string)$nom;
	}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = (string)$id;
	}

	function getContest() {
		return $this->contest;
	}

	function setContest($contest) {
		$this->contest = $contest;
	}

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = (string)$name;
	}

	function getStatut() {
		return $this->statut;
	}

	function setStatut($statut) {
		$this->statut = (string)$statut;
	}

	function getType() {
		return $this->type;
	}

	function setType($type) {
		$this->type = (string)$type;
	}
}
?>