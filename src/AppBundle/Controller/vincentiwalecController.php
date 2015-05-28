<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\vincentiwalecType;
use vincenti\Tools\Kalkulator;
use Symfony\Component\HttpFoundation\Request;


class vincentiwalecController extends Controller
{

    /**
     * @Route("/vincenti/kalkulator/show/form", name="vincenti_kalkulator_show_form")
     */
    public function showFormAction()
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);

        return $this->render(
            'AppBundle:vincentiwalec:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/vincenti/kalkulator/calc", name="vincenti_kalkulator_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:vincentiwalec:wynik.html.twig',
                array('wynik' => $kalkulator->sum())
            );

        }

        return $this->render(
            'AppBundle:vincentiwalec:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
    * @param Kalkulator $kalkulator The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Kalkulator $kalkulator)
    {
        $form = $this->createForm(new vincentiwalecType(), $kalkulator, array(
            'action' => $this->generateUrl('vincenti_kalkulator_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
