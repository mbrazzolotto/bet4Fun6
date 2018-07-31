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

use App\Entity\Bet;
use App\Entity\User;
class DaoBet extends Controller{
    
    /**
     * List bonus.
     * @FOSRest\Get("/bet")
     *
     * @return array
     */
    function getBet() {
        $repository = $this->getDoctrine()->getRepository(Bet::class);
        $bet = $repository->findall();
        $response = json_encode($bet);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get Bonus
     * @FOSRest\Get("/bet/{id}")
     */
    function getBetById(Request $b) {
        $em = $this->getDoctrine()->getManager();
        $bet = $em->getRepository(Bet::class)->findOneBy(['id'=>$b->get('id'),'user'=>$b->get('user'),'type'=>$id->get('type')]);
        $response = json_encode($bet);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get Bonus
     * @FOSRest\Get("/bet/contest/{req}")
     */
    function getAllBetByContest(Request $req){
        $select = "SELECT B.user, B.id, B.score1, B.score2, B.pen1, B.pen2, B.type, B.modified, B.points, B.win, B.perfect, T1.id as idteam1, T1.nom as nomteam1, T1.name as nameteam1, T1.logo as logoteam1,  T2.id as idteam2, T2.nom as nomteam2, T2.name as nameteam2, T2.logo as logoteam2 FROM bet B LEFT OUTER JOIN team T1 ON B.team1=T1.id LEFT OUTER JOIN team T2 ON B.team2=T2.id , `match` M, stage S where B.type=$req->get('type') AND B.user=$req->get('user') and B.id=M.id and M.stage=S.id and S.contest=$req->get('contest')";
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($select);
        $bets = $query->getResult();
        $response = json_encode($bets);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get finish bet by contest
     * @FOSRest\Get("/bet/contest/{req}")
     */
    function getFinishBetByContest(Request $req){
        $select = "SELECT B.user, B.id, B.score1, B.score2, B.pen1, B.pen2, B.type, B.modified, B.points, B.win, B.perfect, T1.id as idteam1, T1.nom as nomteam1, T1.name as nameteam1, T1.logo as logoteam1,  T2.id as idteam2, T2.nom as nomteam2, T2.name as nameteam2, T2.logo as logoteam2 FROM bet B LEFT OUTER JOIN team T1 ON B.team1=T1.id LEFT OUTER JOIN team T2 ON B.team2=T2.id, `match` M where M.begin<now() AND B.type=$req->get('type')  AND B.user=$req->get('user') and B.id=$req->get('match')";;
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($select);
        $bets = $query->getResult();
        $response = json_encode($bets);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get bets by stage
     * @FOSRest\Get("/bet/stage/{req}")
     */
    function getAllBetByStage(Request $req){
        $sql = "SELECT B.user, B.id, B.score1, B.score2, B.pen1, B.pen2, B.type, B.modified, B.points, B.win, B.perfect, T1.id as idteam1, T1.nom as nomteam1, T1.name as nameteam1, T1.logo as logoteam1,  T2.id as idteam2, T2.nom as nomteam2, T2.name as nameteam2, T2.logo as logoteam2 FROM bet B LEFT OUTER JOIN team T1 ON B.team1=T1.id LEFT OUTER JOIN team T2 ON B.team2=T2.id , `match` M where B.type=$req->get('type') AND B.user=$req->get('user') and B.id=M.id and M.stage=$req->get('stage')";
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($select);
        $bets = $query->getResult();
        $response = json_encode($bets);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get qualified teams
     * 
     */
    function getTeamsQualified(Request $req){
        $bets  = $this->getAllBetByStage($req);
    }

    function getFinishBetByMatch(Request $req){
        $sql = "SELECT B.user, B.id, B.score1, B.score2, B.pen1, B.pen2, B.type, B.modified, B.points, B.win, B.perfect, T1.id as idteam1, T1.nom as nomteam1, T1.name as nameteam1, T1.logo as logoteam1,  T2.id as idteam2, T2.nom as nomteam2, T2.name as nameteam2, T2.logo as logoteam2 FROM bet B LEFT OUTER JOIN team T1 ON B.team1=T1.id LEFT OUTER JOIN team T2 ON B.team2=T2.id, `match` M where M.begin<now() AND B.type=$req->get('type') AND B.user=$req->get('user') and B.id=M.id and M.stage=$req->get('stage')";
        $query = $em->createQuery($select);
        $bets = $query->getResult();
        $response = json_encode($bets);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }
//Tous ce qui suit n'a pas encore été testé 


    /**
     * delete bet
     * @FOSRest\Delete("/bet/{req}")
     */
    function deleteBet(Request $req){
        $sql = "DELETE FROM bet WHERE id="+$req->get('match')+" and user="+$req->get('user')+" and type="+$req->get('type');
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($sql);
    }

    /**
     * update bet points
     * @FOSRest\Post("/bet/update/{req}")
     */
    function updatePoints(Request $req){
        $bet=$req->get('bet');
        $sql = "UPDATE bet set points=$req->get('points'), win=$req->get('win'), perfect=$req->get('perfect') WHERE id=".$bet->getId()." and user=".$bet->getUser()." and type=".$bet->getType();
        $query = $em->createQuery($sql);
    }

    /**
     * getUsers
     * @FOSRest\Post("/bet/users/{req}")
     */
    function getUsers(Request $req){
        $sql = "SELECT DISTINCT(B.user) FROM bet B, `match` M where B.id=M.id AND M.stage=$req->get('stage') AND B.type=$req->get('types')";
        $query = $em->createQuery($sql);
        $users = $query->getResult();
        $response = json_encode($users);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    function getAdminStats($contest){

    }
}
?>