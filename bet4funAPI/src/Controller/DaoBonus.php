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



use App\Entity\Bonus;
use App\Entity\User;

class DaoBonus extends Controller{

        /**
         * Lists bonus.
         * @FOSRest\Get("/bonus")
         *
         * @return array
         */
        function getBonus() {
            $repository = $this->getDoctrine()->getRepository(Bonus::class);
            $bonus = $repository->findall();
            $response = json_encode($bonus);
            return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }
        /**
         * get bonus by id.
         * @FOSRest\Get("/bonus/{id}")
         *
         * @return object
         */
        function getBonusById($id){
            $bonus = $this->getDoctrine()->getRepository(Bonus::class)->find($id);
    
            if (!$bonus) {
                    throw $this->createNotFoundException(
                    'No bonus found for id '.$id
                    );
            }
            $response = json_encode($bonus);
            return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
        }

        /**
         * delete bonus.
         * @FOSRest\Delete("/bonus/{bon}")
         *
         */
        function deleteBonus(Request $bon){
            $em = $this->getDoctrine()->getManager();
            $bonus = $em->getRepository(Bonus::class)->findOneBy(['id'=>$bon->get('id'),'stage'=>$bon->get('stage'),'type'=>$bon->get('type')]);
            $em->remove($bonus);
            $em->flush();
            return new Response('Deleted team with id ');
        }

        /**
         * create bonus.
         * @FOSRest\Post("/bonus")
         * 
         * @return array
         */
        function createBonus(Request $bon){
            //var_dump($bon);
            $em = $this->getDoctrine()->getManager();
            $newBonus = new Bonus();
            $newBonus->setUser($bon->get('user'));
            $newBonus->setStage($bon->get('stage'));
            $newBonus->setType($bon->get('type'));
            $newBonus->setPoints($bon->get('points'));
            $em->persist($newBonus);
            $em->flush();
            return new Response('Saved new product with id '.$newBonus->getId());
        }
}
?>