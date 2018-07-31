<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class RankList extends Reentrance {

 	var $ranks; 
 	var $rankuser;

	function getRanks() {
		return $this->ranks;
	}

	function setRanks($ranks) {
		$this->ranks = $ranks;
	}
	
	function getRankuser() {
		return $this->rankuser;
	}

	function setRankuser($rankuser) {
		$this->rankuser = $rankuser;
	}

}
?>