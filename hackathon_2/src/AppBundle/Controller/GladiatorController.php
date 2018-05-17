<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Gladiator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gladiator controller.
 *
 * @Route("gladiator")
 */
class GladiatorController extends Controller
{
    /**
     * Lists all gladiator entities.
     *
     * @Route("/", name="gladiator_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gladiators = $em->getRepository('AppBundle:Gladiator')->findAll();

        return $this->render('gladiator/index.html.twig', array(
            'gladiators' => $gladiators,
        ));
    }

    /**
     * Creates a new gladiator entity.
     *
     * @Route("/new", name="gladiator_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gladiator = new Gladiator();
        $form = $this->createForm('AppBundle\Form\GladiatorType', $gladiator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gladiator);
            $em->flush();

            return $this->redirectToRoute('gladiator_show', array('id' => $gladiator->getId()));
        }

        return $this->render('gladiator/new.html.twig', array(
            'gladiator' => $gladiator,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gladiator entity.
     *
     * @Route("/{id}", name="gladiator_show")
     * @Method("GET")
     */
    public function showAction(Gladiator $gladiator)
    {
        $deleteForm = $this->createDeleteForm($gladiator);

        return $this->render('gladiator/show.html.twig', array(
            'gladiator' => $gladiator,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gladiator entity.
     *
     * @Route("/{id}/edit", name="gladiator_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Gladiator $gladiator)
    {
        $deleteForm = $this->createDeleteForm($gladiator);
        $editForm = $this->createForm('AppBundle\Form\GladiatorType', $gladiator);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gladiator_edit', array('id' => $gladiator->getId()));
        }

        return $this->render('gladiator/edit.html.twig', array(
            'gladiator' => $gladiator,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gladiator entity.
     *
     * @Route("/{id}", name="gladiator_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Gladiator $gladiator)
    {
        $form = $this->createDeleteForm($gladiator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gladiator);
            $em->flush();
        }

        return $this->redirectToRoute('gladiator_index');
    }

    /**
     * Creates a form to delete a gladiator entity.
     *
     * @param Gladiator $gladiator The gladiator entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Gladiator $gladiator)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gladiator_delete', array('id' => $gladiator->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
