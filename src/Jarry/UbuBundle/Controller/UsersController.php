<?php

namespace Jarry\UbuBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UsersController extends Controller
{
    /**
     * @ApiDoc()
     * @return type
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('JarryUbuBundle:User')->findAll();
        $view = $this->view($data, 200)
        ->setTemplate("JarryUbuBundle:getUsers.html.twig")
        ->setTemplateVar('users');
        
        return $this->handleView($view);
    }
}
