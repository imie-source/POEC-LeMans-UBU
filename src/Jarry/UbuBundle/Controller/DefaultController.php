<?php

namespace Jarry\UbuBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        return $this->render('JarryUbuBundle:Default:index.html.twig', array(
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
                    'navCss' => $this->container->getparameter('navCss'),
                    'navDarkCss' => $this->container->getparameter('navDarkCss'),
                    'titreCss' => $this->container->getparameter('titreCss'),
                    'containerCss' => $this->container->getparameter('containerCss'),
                    'carreClicCss' => $this->container->getparameter('carreClicCss'),
                    'carreNewCss' => $this->container->getparameter('carreNewCss'),
                    'carreTextCss' => $this->container->getparameter('carreTextCss'),
        ));
    }

    public function mentionsAction() {
        return $this->render('JarryUbuBundle:Default:mentions_legales.html.twig', array(
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
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
