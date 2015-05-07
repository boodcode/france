<?php

namespace Boodcode\ContactBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Boodcode\ContactBundle\Entity\ContactObjet;
use Boodcode\ContactBundle\Form\ContactObjetType;

/**
 * ContactObjet controller.
 *
 */
class ContactObjetController extends Controller
{

    /**
     * Lists all ContactObjet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BoodcodeContactBundle:ContactObjet')->findAll();

        return $this->render('BoodcodeContactBundle:ContactObjet:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ContactObjet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ContactObjet();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contactObjet_show', array('id' => $entity->getId())));
        }

        return $this->render('BoodcodeContactBundle:ContactObjet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ContactObjet entity.
     *
     * @param ContactObjet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ContactObjet $entity)
    {
        $form = $this->createForm(new ContactObjetType(), $entity, array(
            'action' => $this->generateUrl('contactObjet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ContactObjet entity.
     *
     */
    public function newAction()
    {
        $entity = new ContactObjet();
        $form   = $this->createCreateForm($entity);

        return $this->render('BoodcodeContactBundle:ContactObjet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ContactObjet entity.
     *
     */
    public function showAction($id, $locale)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoodcodeContactBundle:ContactObjet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactObjet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BoodcodeContactBundle:ContactObjet:show.html.twig', array(
            'locale'      => $locale,
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ContactObjet entity.
     *
     */
    public function editAction($id, $locale)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoodcodeContactBundle:ContactObjet')->find($id);
        $entity->setTranslatableLocale($locale);
        $em->refresh($entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactObjet entity.');
        }

        $editForm = $this->createEditForm($entity, $locale);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BoodcodeContactBundle:ContactObjet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ContactObjet entity.
    *
    * @param ContactObjet $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ContactObjet $entity, $locale)
    {
        $form = $this->createForm(new ContactObjetType(), $entity, array(
            'action' => $this->generateUrl('contactObjet_update', array('id' => $entity->getId(), 'locale'=>$locale)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ContactObjet entity.
     *
     */
    public function updateAction(Request $request, $id, $locale)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BoodcodeContactBundle:ContactObjet')->find($id);
        $entity->setTranslatableLocale($locale);
        $em->refresh($entity);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContactObjet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $locale);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            //print_r($request);die();
            $em->flush();

            return $this->redirect($this->generateUrl('contactObjet_edit', array('id' => $id, 'locale' => $locale )));
        }

        return $this->render('BoodcodeContactBundle:ContactObjet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ContactObjet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BoodcodeContactBundle:ContactObjet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ContactObjet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contactObjet'));
    }

    /**
     * Creates a form to delete a ContactObjet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactObjet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
