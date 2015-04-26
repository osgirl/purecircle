<?php

namespace purecircle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use purecircle\AdminBundle\Entity\County;
use purecircle\AdminBundle\Form\CountyType;

/**
 * County controller.
 *
 */
class CountyController extends Controller
{

    /**
     * Lists all County entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('purecircleAdminBundle:County')->findAll();

        return $this->render('purecircleAdminBundle:County:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new County entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new County();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            
           return $this->render('purecircleAdminBundle:County:new.html.twig', array(
            'created' => $entity->getCountyName(),
            'form'   => $form->createView()
        ));
           // return $this->redirect($this->generateUrl('admin_county_show', array('id' => $entity->getId())));
        }

        return $this->render('purecircleAdminBundle:County:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a County entity.
     *
     * @param County $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(County $entity)
    {
        $form = $this->createForm(new CountyType(), $entity, array(
            'action' => $this->generateUrl('admin_county_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Add County',
           'attr'=>array(
               'class'=>'btn btn-success btn-shadow'
               
           )
           
            ));

        return $form;
    }

    /**
     * Displays a form to create a new County entity.
     *
     */
    public function newAction()
    {
        $entity = new County();
        $form   = $this->createCreateForm($entity);
            
        return $this->render('purecircleAdminBundle:County:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a County entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleAdminBundle:County')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find County entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('purecircleAdminBundle:County:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing County entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleAdminBundle:County')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find County entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('purecircleAdminBundle:County:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a County entity.
    *
    * @param County $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(County $entity)
    {
        $form = $this->createForm(new CountyType(), $entity, array(
            'action' => $this->generateUrl('admin_county_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing County entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('purecircleAdminBundle:County')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find County entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_county_edit', array('id' => $id)));
        }

        return $this->render('purecircleAdminBundle:County:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a County entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('purecircleAdminBundle:County')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find County entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_county'));
    }

    /**
     * Creates a form to delete a County entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_county_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
     public function removeAction($id)
    {
      return $this->render('purecircleAdminBundle:County:remove.html.twig', array(
            "id"=>$id
        ));
    }
}
