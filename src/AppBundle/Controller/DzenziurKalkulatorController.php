<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\DzenziurKalkulatorType;
use Dzenziur\Tools\Kalkulator;


class DzenziurKalkulatorController extends Controller
{

    /**
     * @Route("/dzenziur/kalkulator/show/form", name="dzenziur_kalkulator_show_form")
     */
    public function showFormAction()
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);

        return $this->render(
            'AppBundle:DzenziurKalkulator:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/dzenziur/kalkulator/calc", name="dzenziur_kalkulator_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:DzenziurKalkulator:wynik.html.twig',
                array('wynik' => $kalkulator->add())
            );

        }

        return $this->render(
            'AppBundle:DzenziurKalkulator:form.html.twig',
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
        $form = $this->createForm(new DzenziurKalkulatorType(), $kalkulator, array(
            'action' => $this->generateUrl('dzenziur_kalkulator_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
