<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\barteko2KalkulatorType;
use barteko2\Tools\Kalkulator;


class barteko2KalkulatorController extends Controller
{

    /**
     * @Route("/barteko2/kalkulator/show/form", name="barteko2_kalkulator_show_form")
     */
    public function showFormAction()
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);

        return $this->render(
            'AppBundle:barteko2Kalkulator:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/barteko2/kalkulator/calc", name="barteko2_kalkulator_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:barteko2Kalkulator:wynik.html.twig',
                array('wynik' => $kalkulator->sum())
            );

        }

        return $this->render(
            'AppBundle:barteko2Kalkulator:form.html.twig',
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
        $form = $this->createForm(new barteko2KalkulatorType(), $kalkulator, array(
            'action' => $this->generateUrl('barteko2_kalkulator_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
