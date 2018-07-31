<?php
namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use App\Entity\Match;



class DaoMatch extends Controller{

  //  var $select = "M.tv, M.live, M.id, M.stage, DATE_FORMAT(M.begin, '%Y-%m-%dT%T+02:00') as begin, M.score1, M.score2, M.pen1, M.pen2, M.modified, T1.id as idteam1, T1.nom as nomteam1, T1.logo as logoteam1, T1.name as nameteam1, T2.id as idteam2, T2.nom as nomteam2, T2.logo as logoteam2, T2.name as nameteam2, EM.rank1, EM.stage1, EM.lib1, EM.rank2, EM.stage2, EM.lib2 FROM App\Entity\Match M LEFT OUTER JOIN App\Entity\Team T1 ON M.team1=T1.id LEFT OUTER JOIN App\Entity\Team T2 ON M.team2=T2.id LEFT OUTER JOIN App\Entity\ExtraMatch EM with EM.id=M.id";
    
    /**
    * get team by id.
    * @FOSRest\Get("/matches")
    *
    * @return array
    */
    function getAllMatches(){
    }

    /**
     * get match by id.
     * @FOSRest\Get("/match/{id}")
     *
     * @return array
     */
    function getMatch($id){
    }
}

?>