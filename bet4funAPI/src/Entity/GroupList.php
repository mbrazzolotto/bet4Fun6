<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class GroupList extends Reentrance {

 	var $groups; 

	function getGroups() {
		return $this->groups;
	}

	function setGroups($groups) {
		$this->groups = $groups;
	}

}
?>