<?php

namespace Jarry\UbuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JarryUbuBundle:Default:index.html.twig', array(
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
            'carreTextCss' => $this->container->getparameter('carreTextCss'),
        ));
    }
}
