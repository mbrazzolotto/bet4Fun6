<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="extra_match")
 */
class ExtraMatch {

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/

	public $id;

	/**
    * @ORM\Column(type="integer", length=100)
    */
	public $stage1;


	/**
    * @ORM\Column(type="integer", length=100)
    */
	public $rank1;
	 

	/**
    * @ORM\Column(type="integer", length=100)
    */
 	public $lib1;
	 
	
	/**
    * @ORM\Column(type="integer", length=100)
    */ 
	public $stage2;
	 

	/**
    * @ORM\Column(type="integer", length=100)
    */
	public $rank2;
	 

	/**
    * @ORM\Column(type="string", length=100)
    */
	public $lib2;

}
?>