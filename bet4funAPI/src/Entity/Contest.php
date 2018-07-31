<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contest")
 */
class Contest {

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
     var $nom;
     
    /**
    * @ORM\Column(type="string", length=100)
    */ 
	var $logo;
	 
	/**
    * @ORM\Column(type="integer")
    * 
    */
	var $statut; // 0 : invisible, 1 : à venir, 2 : en cours, 3 : terminé
	 
	/**
    * @ORM\Column(type="string")
    * 
    */
 	var $modified;

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

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = (string)$name;
	}

	function getNom() {
		return $this->nom;
	}

	function setNom($nom) {
		$this->nom = (string)$nom;
	}

	function getStatut() {
		return $this->statut;
	}

	function setStatut($statut) {
		$this->statut = (string)$statut;
	}

	function getLogo() {
		return $this->logo;
	}

	function setLogo($logo) {
		$this->logo = $logo;
	}
	
}
?>