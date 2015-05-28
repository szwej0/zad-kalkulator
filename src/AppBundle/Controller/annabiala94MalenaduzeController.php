<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94MalenaduzeType;
use annabiala94\Tools\Strings\Convert;


class annabiala94MalenaduzeController extends Controller
{

    /**
     * @Route("/annabiala94/malenaduze/show/form", name="annabiala94_malenaduze_show_form")
     */
    public function showFormAction()
    {
        $malenaduze = new Convert();
        $form = $this->createCreateForm($malenaduze);

        return $this->render(
            'AppBundle:annabiala94Malenaduze:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/malenaduze/calc", name="annabiala94_malenaduze_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $malenaduze = new Convert();
        $form = $this->createCreateForm($malenaduze);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Malenaduze:wynik.html.twig',
                array('wynik' => $malenaduze->toUpper())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Malenaduze:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Convert $malenaduze The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convert $malenaduze)
    {
        $form = $this->createForm(new annabiala94MalenaduzeType(), $malenaduze, array(
            'action' => $this->generateUrl('annabiala94_malenaduze_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }


}
