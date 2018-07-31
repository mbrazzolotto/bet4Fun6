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

use App\Entity\Contest;
use App\Entity\Stage;
use App\Entity\Match;


class DaoContest extends Controller{

        /**
        * Lists all contests.
        * @FOSRest\Get("/contests")
        *
        * @return array
        */
        function getAllTeams() {
            $repository = $this->getDoctrine()->getRepository(Contest::class);
            $contests = $repository->findall();
            $response = json_encode($contests);
            return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }
   

      /**
         * get contest by id.
         * @FOSRest\Get("/contest/{id}")
         *
         * @return object
         */
        function getContest($id){
            $contest = $this->getDoctrine()->getRepository(Contest::class)->find($id);
    
            if (!$contest) {
                    throw $this->createNotFoundException(
                    'No team found for id '.$id
                    );
            }
            $response = json_encode($contest);
            return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }

        /**
         * get last modified contest.
         * @FOSRest\Get("/contestlast")
         *
         * @return object
         */
        function getLastModified(){
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery('SELECT max(c.modified) FROM App\Entity\Contest c');
            $contest = $query->getResult();
            $response = json_encode($contest);
            return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }

        /**
         * create new contest.
         * @FOSRest\Delete("/contest/{id}")
         *
         */
        public function deleteContest(Request $contest){
            $em = $this->getDoctrine()->getManager();
            $contest = $em->getRepository(Contest::class)->find($contest->get('id'));
            $em->remove($contest);
            $em->flush();
            return new Response('Deleted team with id '.$contest->getId());
        }

        /**
         * create new contest.
         * @FOSRest\Get("/start")
         *
         */
        function isContestStarted(){
            $em = $this->getDoctrine()->getManager();
            //$query = $em->createQuery("SELECT C.statut, C.id FROM App\Entity\Contest C join App\Entity\Stage S with C.id = S.contest join App\Entity\Match M  with S.id = M.stage");
           // $query = $em->createQuery("SELECT C.statut, C.id FROM ")

            $sql = "SELECT C.statut, C.id FROM App\Entity\Contest C inner join App\Entity\Stage S with C.id = S.contest inner join App\Entity\Match M with S.id = M.stage";
            $query = $em->createQuery($sql);
            $result = $query->getResult();
            /*if($result > 1){
                return true;
            }else{
               
                $query = $em->createQuery($sql);
                $result = $query->getResult();
                if(new DateTime($result)<new DateTime("now")) {
                    return true;
                } else {
                    return false;
                }

            }*/
            return new Response('Something with contest with id ');
        }


        

}
?>