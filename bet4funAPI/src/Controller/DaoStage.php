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

use App\Entity\Stage;

class DaoStage extends Controller{

    /**
    * Lists all stages.
    * @FOSRest\Get("/stages")
    *
    * @return array
    */
    function getAllStages() {
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stages = $repository->findall();
        $response = json_encode($stages);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }


    /**
    * get team by id.
    * @FOSRest\Get("/stage/{id}")
    *
    * @return object
    */
    function getStage($id){
        $stage = $this->getDoctrine()->getRepository(Stage::class)->find($id);

        if (!$stage) {
                throw $this->createNotFoundException(
                'No stages found for id '.$id
                );
        }
        $response = json_encode($stage);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get last modified stage.
     * @FOSRest\Get("/stagelast")
     *
     * @return object
     */
    function getLastModified(){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT max(s.modified) FROM App\Entity\Stage s');
        $stage = $query->getResult();
        $response = json_encode($stage);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * create new stage.
     * @FOSRest\Post("/newstage")
     */
    function createStage(Request $stage){
        $em = $this->getDoctrine()->getManager();
        $newStage = new Team();
        $newStage->setName($stage->get('name'));
        $newStage->setNom($stage->get('nom'));
        $newStage->setContest($stage->get('contest'));
        $newStage->setType($stage->get('type'));
        $newStage->setStatus($stage->get('status'));
        $newStage->setModified(date("d/m/Y"));
        $em->persist($newStage);
        $em->flush();
        return new Response('Saved new product with id '.$newStage->getId());
    }

    /**
    * Delete stage.
    * @FOSRest\Delete("/stage/{id}")
    *
    */
    public function deleteTeam(Request $stage){
        $em = $this->getDoctrine()->getManager();
        $stage = $em->getRepository(Stage::class)->find($stage->get('id'));
        $em->remove($team);
        $em->flush();
        return new Response('Deleted team with id '.$team->getId());
    }

}
