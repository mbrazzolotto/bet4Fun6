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

use App\Entity\UserDesc;
use App\Entity\User;

class DaoUser extends Controller{


    /**
    * Lists all teams.
    * @FOSRest\Get("/users")
    *
    * @return array
    */
    function getAllUsers() {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findall();
        $response = json_encode($users);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }

     /**
     * get user by id.
     * @FOSRest\Get("/user/{id}")
     *
     * @return object
     */
    /*function getUser($id){
        $user = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneBy(['id' => $id]);
        $response = json_encode($user);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }*/

    /**
    * get user by login.
    * @FOSRest\Get("/userlogin/{login}")
    *
    * @return array
    */
    function getUserByLogin($login){
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneBy(['login' => $login]);
        $response = json_encode($user);
        return new Response($response,Response::HTTP_OK,array('content-type' => 'application/json'));
    }
}