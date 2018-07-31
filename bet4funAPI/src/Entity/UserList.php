<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class UserList extends Reentrance {

 	var $users; 

	function getUsers() {
		return $this->users;
	}

	function setUsers($users) {
		$this->users = $users;
	}

}
?>