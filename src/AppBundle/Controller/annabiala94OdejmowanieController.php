<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94OdejmowanieType;
use annabiala94\Tools\Odejmowanie;


class annabiala94OdejmowanieController extends Controller
{

    /**
     * @Route("/annabiala94/odejmowanie/show/form", name="annabiala94_odejmowanie_show_form")
     */
    public function showFormAction()
    {
        $odejmowanie = new Odejmowanie();
        $form = $this->createCreateForm($odejmowanie);

        return $this->render(
            'AppBundle:annabiala94Odejmowanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/odejmowanie/calc", name="annabiala94_odejmowanie_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $odejmowanie = new Odejmowanie();
        $form = $this->createCreateForm($odejmowanie);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Odejmowanie:wynik.html.twig',
                array('wynik' => $odejmowanie->odejmowanie())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Odejmowanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Odejmowanie $odejmowanie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Odejmowanie $odejmowanie)
    {
        $form = $this->createForm(new annabiala94OdejmowanieType(), $odejmowanie, array(
            'action' => $this->generateUrl('annabiala94_odejmowanie_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
