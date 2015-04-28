<?php

namespace purecircle\ManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use purecircle\ManagerBundle\Entity\TechAdv;
use purecircle\ManagerBundle\Form\TechAdvType;

/**
 * TechAdv controller.
 *
 */
class TechAdvController extends Controller
{

    /**
     * Lists all TechAdv entities.
     *
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        $manager=  $this->getUser()->getId();
        $entities = $em->getRepository('purecircleManagerBundle:TechAdv')->findAll();
        return $this->render('purecircleManagerBundle:TechAdv:index.html.twig', array(
            'entities' => $entities,
            'manager'=>$manager
            
        ));
    }
    /**
     * Creates a new TechAdv entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TechAdv();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('manager_show', array('id' => $entity->getId())));
        }

        return $this->render('purecircleManagerBundle:TechAdv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TechAdv entity.
     *
     * @param TechAdv $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TechAdv $entity)
    {
        $form = $this->createForm(new TechAdvType(), $entity, array(
            'action' => $this->generateUrl('advisor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TechAdv entity.
     *
     */
    public function newAction()
    {
        $entity = new TechAdv();
        $form   = $this->createCreateForm($entity);

        return $this->render('purecircleManagerBundle:TechAdv:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TechAdv entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleManagerBundle:TechAdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('purecircleManagerBundle:TechAdv:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TechAdv entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleManagerBundle:TechAdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAdv entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('purecircleManagerBundle:TechAdv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TechAdv entity.
    *
    * @param TechAdv $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TechAdv $entity)
    {
        $form = $this->createForm(new TechAdvType(), $entity, array(
            'action' => $this->generateUrl('manager_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TechAdv entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleManagerBundle:TechAdv')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAdv entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('manager_edit', array('id' => $id)));
        }

        return $this->render('purecircleManagerBundle:TechAdv:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TechAdv entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('purecircleManagerBundle:TechAdv')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TechAdv entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('manager'));
    }

    /**
     * Creates a form to delete a TechAdv entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('manager_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
