<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="`group`")
 */
class Group
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="string", length=100)
    */
    var $name;
     
    /**
    * @ORM\Column(type="integer")
    */
 	var $owner;
     
     /**
    * @ORM\Column(type="string", length=100)
    */
    var $description;

    public function getId()
    {
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

	function getOwner() {
		return $this->owner;
	}

	function setOwner($owner) {
		$this->owner = (string)$owner;
	}

	function getDescription() {
		return $this->description;
	}

	function setDescription($description) {
		$this->description = (string)$description;
	}
}
