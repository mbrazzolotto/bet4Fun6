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

use App\Entity\Team;

class DaoTeam extends Controller{

        /**
        * Lists all teams.
        * @FOSRest\Get("/teams")
        *
        * @return array
        */
        function getAllTeams() {
                $repository = $this->getDoctrine()->getRepository(Team::class);
                $teams = $repository->findall();
                $response = json_encode($teams);
                return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }

        /**
         * get team by id.
         * @FOSRest\Get("/team/{id}")
         *
         * @return object
         */
        function getTeam($id){
                $team = $this->getDoctrine()->getRepository(Team::class)->find($id);
        
                if (!$team) {
                        throw $this->createNotFoundException(
                        'No team found for id '.$id
                        );
                }
                $response = json_encode($team);
                return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }


         /**
         * get last modified team.
         * @FOSRest\Get("/teamlast")
         *
         * @return object
         */
        function getLastModified(){
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT max(t.modified) FROM App\Entity\Team t');
                $team = $query->getResult();
                $response = json_encode($team);
                return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }


        function getListeTeambyContest($id) {
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery('SELECT DISTINCT(T.id), T.name, T.nom, T.logo, T.modified FROM App\Entity\Team T, App\Entity\Stage S, App\Entity\Match M WHERE S.contest='+$id+' AND M.stage=S.id AND (M.team1=T.id OR M.team2=T.id) GROUP BY T.id');
                $team = $query->getResult();
                $response = json_encode($team);
                return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }


         /**
         * create new team.
         * @FOSRest\Post("/newteam")
         */
        function createTeam(Request $team){
                $em = $this->getDoctrine()->getManager();
                $newTeam = new Team();
                $newTeam->setName($team->get('name'));
                $newTeam->setNom($team->get('nom'));
                $newTeam->setLogo($team->get('logo'));
                $newTeam->setModified(date("d/m/Y"));
                $em->persist($newTeam);
                $em->flush();
                return new Response('Saved new product with id '.$newTeam->getId());
        }

        /**
         * create new team.
         * @FOSRest\Put("/team/update/{id}")
         *
         */
        public function updateTeam(Team $team){
                $em = $this->getDoctrine()->getManager();
                $updateTeam = $em->getRepository(Team::class)->find($team->get('id'));

                if (!$updateTeam) {
                        throw $this->createNotFoundException(
                                'No team found for  '.$team
                        );
                }
        
                $updateTeam->setName($team->get('name'));
                var_dump($team->get('name'));
                $updateTeam->setNom($team->get('nom'));
                $updateTeam->setModified(date("Y-m-d "));
                $em->flush();
        
                return new Response('Updated team with id '.$updateTeam->getId());
        }

        /**
         * delete team.
         * @FOSRest\Delete("/team/{id}")
         *
         */
        public function deleteTeam(Request $team){
                $em = $this->getDoctrine()->getManager();
                $team = $em->getRepository(Team::class)->find($team->get('id'));
                $em->remove($team);
                $em->flush();
                return new Response('Deleted team with id '.$team->getId());
        }
}
?>