<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\rafalnavpoletrojkataType;
use rafalnav\Tools\poletrojkata;
use Symfony\Component\HttpFoundation\Request;


class rafalnavpoletrojkataController extends Controller
{

    /**
     * @Route("/rafalnav/poletrojkata/show/form", name="rafalnav_poletrojkata_show_form")
     */
    public function showFormAction()
    {
        $poletrojkata = new poletrojkata();
        $form = $this->createCreateForm($poletrojkata);

        return $this->render(
            'AppBundle:rafalnavpoletrojkata:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/rafalnav/poletrojkata/calc", name="rafalnav_poletrojkata_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $poletrojkata = new poletrojkata();
        $form = $this->createCreateForm($poletrojkata);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:rafalnavpoletrojkata:wynik.html.twig',
                array('wynik' => $poletrojkata->field())
            );

        }

        return $this->render(
            'AppBundle:rafalnavpoletrojkata:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param poletrojkata $poletrojkata The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(poletrojkata $poletrojkata)
    {
        $form = $this->createForm(new rafalnavpoletrojkataType(), $poletrojkata, array(
            'action' => $this->generateUrl('rafalnav_poletrojkata_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
