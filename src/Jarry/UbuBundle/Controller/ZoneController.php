<?php

namespace Jarry\UbuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Jarry\UbuBundle\Entity\Zone;
use Jarry\UbuBundle\Form\ZoneType;

/**
 * Zone controller.
 *
 */
class ZoneController extends Controller
{

    /**
     * Lists all Zone entities.
     *
     */
    public function indexAction($idPlace)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JarryUbuBundle:Zone')->findAll();

        return $this->render('JarryUbuBundle:Zone:index.html.twig', array(
            'entities' => $entities,
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
        ));
    }
    /**
     * Creates a new Zone entity.
     *
     */
    public function createAction(Request $request, $idPlace)
    {
        
        $em = $this->getDoctrine()->getManager();
        $place = $em->getRepository('JarryUbuBundle:Place')->findOneById($idPlace);
        $entity = new Zone();
        $entity->setPlace($place);
        $form = $this->createCreateForm($entity, $idPlace);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('zone_show', array('id' => $entity->getId(), 'idPlace' => $idPlace )));
        }

        return $this->render('JarryUbuBundle:Zone:new.html.twig', array(
            'entity' => $entity,
            
            'form'   => $form->createView(),
            'btnCss' => $this->container->getparameter('btnCss'),
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
        ));
    }

    /**
     * Creates a form to create a Zone entity.
     *
     * @param Zone $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Zone $entity, $idPlace)
    {
        $form = $this->createForm(new ZoneType(), $entity, array(
            'action' => $this->generateUrl('zone_create', array ('idPlace' => $idPlace)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Zone entity.
     *
     */
    public function newAction($idPlace)
    {
        $em = $this->getDoctrine()->getManager();
        $place = $em->getRepository('JarryUbuBundle:Place')->findOneById($idPlace);
        $entity = new Zone();
        $entity->setPlace($place);
        
        $form   = $this->createCreateForm($entity, $idPlace);
        $form->add('submit', SubmitType::class, array(
            'label' => 'Créer',
            'attr'  => array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo-100 mdl-color-text--purple-400 table_btn2')
        ));

        return $this->render('JarryUbuBundle:Zone:new.html.twig', array(
            'entity' => $entity,
           
            'form'   => $form->createView(),
            'btnCss' => $this->container->getparameter('btnCss'),
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
            'carreTextCss' => $this->container->getParameter('carreTextCss'),
        ));
    }

    /**
     * Finds and displays a Zone entity.
     *
     */
    public function showAction($id, $idPlace)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JarryUbuBundle:Zone')->findOneById($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $deleteForm = $this->createDeleteForm($id, $idPlace);
        $deleteForm->add('submit', SubmitType::class, array(
            'label' => 'Supprimer',
            'attr'  => array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--indigo-100 mdl-color-text--purple-400 table_btn2')
        ));

        return $this->render('JarryUbuBundle:Zone:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'btnCss' => $this->container->getparameter('btnCss'),
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
            'carreTextCss' => $this->container->getParameter('carreTextCss'),
        ));
    }

    /**
     * Displays a form to edit an existing Zone entity.
     *
     */
    public function editAction($id, $idPlace)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JarryUbuBundle:Zone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $editForm = $this->createEditForm($entity, $idPlace);
        $editForm->add('submit', SubmitType::class, array(
            'label' => 'Sauvegarder',
            'attr'  => array('class' => $this->container->getParameter('btn2Css'))
        ));
        $deleteForm = $this->createDeleteForm($id, $idPlace);
        $deleteForm->add('submit', SubmitType::class, array(
            'label' => 'Supprimer',
            'attr'  => array('class' => $this->container->getParameter('btn2Css'))
        ));

        return $this->render('JarryUbuBundle:Zone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'btnCss' => $this->container->getparameter('btnCss'),
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
            'carreTextCss' => $this->container->getParameter('carreTextCss'),
        ));
    }

    /**
    * Creates a form to edit a Zone entity.
    *
    * @param Zone $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Zone $entity, $idPlace)
    {
        $form = $this->createForm(new ZoneType(), $entity, array(
            'action' => $this->generateUrl('zone_update', array('id' => $entity->getId(), 'idPlace' => $idPlace)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing Zone entity.
     *
     */
    public function updateAction(Request $request, $id, $idPlace)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JarryUbuBundle:Zone')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Zone entity.');
        }

        $deleteForm = $this->createDeleteForm($id, $idPlace);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('zone_edit', array('id' => $id, 'idPlace' => $idPlace)));
        }

        return $this->render('JarryUbuBundle:Zone:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'btnCss' => $this->container->getparameter('btnCss'),
            'navCss' => $this->container->getparameter('navCss'),
            'navDarkCss' => $this->container->getparameter('navDarkCss'),
            'titreCss' => $this->container->getparameter('titreCss'),
            'containerCss' => $this->container->getparameter('containerCss'),
            'carreClicCss' => $this->container->getparameter('carreClicCss'),
            'carreNewCss' => $this->container->getparameter('carreNewCss'),
        ));
    }
    /**
     * Deletes a Zone entity.
     *
     */
    public function deleteAction(Request $request, $id, $idPlace)
    {
        $form = $this->createDeleteForm($id, $idPlace);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JarryUbuBundle:Zone')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Zone entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        
        return $this->redirect($this->generateUrl('ubu_place_show', array('id' => $idPlace)));
    }

    /**
     * Creates a form to delete a Zone entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id, $idPlace)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('zone_delete', array('id' => $id, 'idPlace' => $idPlace)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
