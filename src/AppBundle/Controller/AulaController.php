<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Aula;
use AppBundle\Form\AulaType;

/**
 * Aula controller.
 *
 * @Route("/aula")
 */
class AulaController extends Controller
{
    /**
     * Lists all Aula entities.
     *
     * @Route("/", name="aula_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $aulas = $em->getRepository('AppBundle:Aula')->findAll();

        return $this->render('aula/index.html.twig', array(
            'aulas' => $aulas,
        ));
    }

    /**
     * Creates a new Aula entity.
     *
     * @Route("/new", name="aula_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $aula = new Aula();
        $form = $this->createForm('AppBundle\Form\AulaType', $aula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            return $this->redirectToRoute('aula_show', array('id' => $aula->getId()));
        }

        return $this->render('aula/new.html.twig', array(
            'aula' => $aula,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Aula entity.
     *
     * @Route("/{id}", name="aula_show")
     * @Method("GET")
     */
    public function showAction(Aula $aula)
    {
        $deleteForm = $this->createDeleteForm($aula);

        return $this->render('aula/show.html.twig', array(
            'aula' => $aula,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Aula entity.
     *
     * @Route("/{id}/edit", name="aula_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Aula $aula)
    {
        $deleteForm = $this->createDeleteForm($aula);
        $editForm = $this->createForm('AppBundle\Form\AulaType', $aula);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            return $this->redirectToRoute('aula_edit', array('id' => $aula->getId()));
        }

        return $this->render('aula/edit.html.twig', array(
            'aula' => $aula,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Aula entity.
     *
     * @Route("/{id}", name="aula_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Aula $aula)
    {
        $form = $this->createDeleteForm($aula);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aula);
            $em->flush();
        }

        return $this->redirectToRoute('aula_index');
    }

    /**
     * Creates a form to delete a Aula entity.
     *
     * @param Aula $aula The Aula entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Aula $aula)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('aula_delete', array('id' => $aula->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
