<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94KazdezduzejType;
use annabiala94\Tools\Strings\Convert;


class annabiala94KazdezduzejController extends Controller
{

    /**
     * @Route("/annabiala94/kazdezduzej/show/form", name="annabiala94_kazdezduzej_show_form")
     */
    public function showFormAction()
    {
        $kazdezduzej = new Convert();
        $form = $this->createCreateForm($kazdezduzej);

        return $this->render(
            'AppBundle:annabiala94Kazdezduzej:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/kazdezduzej/calc", name="annabiala94_kazdezduzej_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kazdezduzej = new Convert();
        $form = $this->createCreateForm($kazdezduzej);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Kazdezduzej:wynik.html.twig',
                array('wynik' => $kazdezduzej->ucfirst())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Kazdezduzej:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Convert $kazdezduzej The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convert $kazdezduzej)
    {
        $form = $this->createForm(new annabiala94KazdezduzejType(), $kazdezduzej, array(
            'action' => $this->generateUrl('annabiala94_kazdezduzej_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }


}
