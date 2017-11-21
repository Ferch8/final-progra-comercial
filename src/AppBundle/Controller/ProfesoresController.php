<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Profesores;
use AppBundle\Form\ProfesoresType;

/**
 * Profesores controller.
 *
 * @Route("/profesores")
 */
class ProfesoresController extends Controller
{
    /**
     * Lists all Profesores entities.
     *
     * @Route("/", name="profesores_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profesores = $em->getRepository('AppBundle:Profesores')->findAll();

        return $this->render('profesores/index.html.twig', array(
            'profesores' => $profesores,
        ));
    }

    /**
     * Creates a new Profesores entity.
     *
     * @Route("/new", name="profesores_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $profesore = new Profesores();
        $form = $this->createForm('AppBundle\Form\ProfesoresType', $profesore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesore);
            $em->flush();

            return $this->redirectToRoute('profesores_show', array('id' => $profesore->getId()));
        }

        return $this->render('profesores/new.html.twig', array(
            'profesore' => $profesore,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Profesores entity.
     *
     * @Route("/{id}", name="profesores_show")
     * @Method("GET")
     */
    public function showAction(Profesores $profesore)
    {
        $deleteForm = $this->createDeleteForm($profesore);

        return $this->render('profesores/show.html.twig', array(
            'profesore' => $profesore,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Profesores entity.
     *
     * @Route("/{id}/edit", name="profesores_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Profesores $profesore)
    {
        $deleteForm = $this->createDeleteForm($profesore);
        $editForm = $this->createForm('AppBundle\Form\ProfesoresType', $profesore);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesore);
            $em->flush();

            return $this->redirectToRoute('profesores_edit', array('id' => $profesore->getId()));
        }

        return $this->render('profesores/edit.html.twig', array(
            'profesore' => $profesore,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Profesores entity.
     *
     * @Route("/{id}", name="profesores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Profesores $profesore)
    {
        $form = $this->createDeleteForm($profesore);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profesore);
            $em->flush();
        }

        return $this->redirectToRoute('profesores_index');
    }

    /**
     * Creates a form to delete a Profesores entity.
     *
     * @param Profesores $profesore The Profesores entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profesores $profesore)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesores_delete', array('id' => $profesore->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
