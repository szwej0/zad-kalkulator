<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\kamilnapKalkulatorType;
use rafalnav\Tools\Kalkulator;
use Symfony\Component\HttpFoundation\Request;


class kamilnapKalkulatorController extends Controller
{

    /**
     * @Route("/kamilnap/kalkulator/show/form", name="kamilnap_kalkulator_show_form")
     */
    public function showFormAction()
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);

        return $this->render(
            'AppBundle:kamilnapKalkulator:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/kamilnap/kalkulator/calc", name="kamilnap_kalkulator_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:kamilnapKalkulator:wynik.html.twig',
                array('wynik' => $kalkulator->sum())
            );

        }

        return $this->render(
            'AppBundle:kamilnapKalkulator:form.html.twig',
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
        $form = $this->createForm(new kamilnapKalkulatorType(), $kalkulator, array(
            'action' => $this->generateUrl('kamilnap_kalkulator_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
