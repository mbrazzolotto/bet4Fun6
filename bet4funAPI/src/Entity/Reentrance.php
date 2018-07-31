<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Reentrance {

	var $total;
	var $nb;
	var $suite;

    public function __construct ( $nb ) {
        $this->nb = $nb;
    }

	function getTotal() {
		return $this->total;
	}

	function setTotal($total) {
		$this->total = $total;
	}

	function getNb() {
		return $this->nb;
	}

	function setNb($nb) {
		$this->nb = $nb;
	}

	function getSuite() {
		return $this->suite;
	}

	function setSuite($suite) {
		$this->suite = $suite;
	}
}
?>