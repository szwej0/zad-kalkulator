<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\shuwaxObjprostoType;
use Shuwax\Tools\Objprosto;


class shuwaxObjprostoController extends Controller
{

    /**
     * @Route("/shuwax/objprosto/show/form", name="shuwax_objprosto_show_form")
     */
    public function showFormAction()
    {
        $objprosto = new Objprosto();
        $form = $this->createCreateForm($objprosto);

        return $this->render(
            'AppBundle:shuwaxObjprosto:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/shuwax/objprosto/calc", name="shuwax_objprosto_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $objprosto = new Objprosto();
        $form = $this->createCreateForm($objprosto);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:shuwaxObjprosto:wynik.html.twig',
                array('wynik' => $objprosto->objprosto())
            );

        }

        return $this->render(
            'AppBundle:shuwaxObjprosto:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Objprosto $objprosto The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Objprosto $objprosto)
    {
        $form = $this->createForm(new shuwaxObjprostoType(), $objprosto, array(
            'action' => $this->generateUrl('shuwax_objprosto_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
