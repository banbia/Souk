<?php

namespace Souk\BackBundle\Controller;

use Souk\BackBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Category controller.
 *
 */
class CategoriesController extends Controller
{
    /**
     * Lists all category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('BackBundle:Categories')->findAll();

        return $this->render('BackBundle:categories:index.html.twig', array(
            'categories' => $categories,
        ));
    }

    /**
     * Creates a new category entity.
     *
     */
    public function newAction(Request $request)
    {
        $category = new Categories();
        $form = $this->createForm('Souk\BackBundle\Form\CategoriesType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('categories_index', array('id' => $category->getId()));
        }

        return $this->render('BackBundle:categories:new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }




    /**
     * Displays a form to edit an existing category entity.
     *
     */
    public function editAction(Request $request, Categories $category)
    {

        $editForm = $this->createForm('Souk\BackBundle\Form\CategoriesType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

          return $this->redirectToRoute('categories_index');
        }

        return $this->render('BackBundle:categories:edit.html.twig', array(
            'category' => $category,
            'edit_form' => $editForm->createView(),

        ));
    }


    public function deleteAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $categorie = $em->getRepository('BackBundle:Categories')->find($id);

      $em->remove($categorie);
      $em->flush();
      return $this->redirectToRoute('categories_index');
    }


}
