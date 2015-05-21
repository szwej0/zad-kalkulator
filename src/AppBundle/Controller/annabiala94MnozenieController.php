<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94MnozenieType;
use annabiala94\Tools\Mnozenie;


class annabiala94MnozenieController extends Controller
{

    /**
     * @Route("/annabiala94/mnozenie/show/form", name="annabiala94_mnozenie_show_form")
     */
    public function showFormAction()
    {
        $mnozenie = new Mnozenie();
        $form = $this->createCreateForm($mnozenie);

        return $this->render(
            'AppBundle:annabiala94Mnozenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/mnozenie/calc", name="annabiala94_mnozenie_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $mnozenie = new Mnozenie();
        $form = $this->createCreateForm($mnozenie);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Mnozenie:wynik.html.twig',
                array('wynik' => $mnozenie->mnozenie())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Mnozenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Mnozenie $mnozenie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Mnozenie $mnozenie)
    {
        $form = $this->createForm(new annabiala94MnozenieType(), $mnozenie, array(
            'action' => $this->generateUrl('annabiala94_mnozenie_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
