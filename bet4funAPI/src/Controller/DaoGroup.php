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

use App\Entity\Group;
use App\Entity\GroupList;

class DaoGroup extends Controller{

    /**
    * Lists all groups.
    * @FOSRest\Get("/groups")
    *
    * @return array
    */
    function getAllGroups() {
        $repository = $this->getDoctrine()->getRepository(Group::class);
        $groups = $repository->findall();
        $response = json_encode($groups);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
    * get team by id.
    * @FOSRest\Get("/group/{id}")
    *
    * @return object
    */
    function getGroup($id){
        $group = $this->getDoctrine()->getRepository(Group::class)->find($id);

        if (!$group) {
                throw $this->createNotFoundException(
                'No group found for id '.$id
                );
        }
        $response = json_encode($group);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
    * get nb Group.
    * @FOSRest\Get("/nbgroup/")
    *
    * @return object
    */
    function getNbGroup(){
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT count(g)
            FROM App\Entity\Group g');
        $nbGrp = $query->getResult();
        $response = json_encode($nbGrp);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
    * get nb Group.
    * @FOSRest\Get("/listgroup/{begin}")
    *
    * @return array
    */
    function getListGroup($begin){
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->getConnection()->executeQuery(
            'SELECT G.name, G.id, G.owner, G.description, count(GU.user) as nbuser from App\Entity\Group G INNER JOIN GroupUser GU with GU.group=G.id GROUP BY G.id limit '+$begin+','+$this.getNbGroup());
        $listGrp = $query->getResult();
        $response = json_encode($listGrp);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

    /**
     * get team by id.
     * @FOSRest\Get("/group/{name}")
     *
     * @return object
     */
    function searchGroup($name){
        $group = $this->getDoctrine()->getRepository(Group::class)->findOneByName($name);

        if (!$group) {
                throw $this->createNotFoundException(
                'No group found for id '.$id
                );
        }
        $response = json_encode($group);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }


    /**
     * delete group.
     * @FOSRest\Delete("/group/{id}")
     *
     */
    public function deleteGroup(Request $group){
        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository(Group::class)->find($group->get('id'));
        $em->remove($group);
        $em->flush();
        return new Response('Deleted group with id '.$group->getId());
    }

    /**
     * create group 
     * @FOSRest\Post("/group")
     */
    public function createGroup(Request $request){
        $em = $this->getDoctrine()->getManager();
        $newGroup = new Group();
        $newGroup->setName($request->get('name'));
        $newGroup->setOwner($request->get('owner'));
        $newGroup->setDescription($request->get('description'));
        $em->persist($newGroup);
        $em->flush();
        return new Response('created zdagroup with id '.$newGroup->getId());
    }
}