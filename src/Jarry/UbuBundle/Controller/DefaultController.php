<?php

namespace Jarry\UbuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JarryUbuBundle:Default:index.html.twig');
    }
}
