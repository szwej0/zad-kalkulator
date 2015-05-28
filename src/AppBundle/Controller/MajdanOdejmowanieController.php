<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\MajdanOdejmowanieType;
use Majdan\Tools\Odejmowanie;


class MajdanOdejmowanieController extends Controller
{

    /**
     * @Route("/majdan/odejmowanie/show/form", name="majdan_odejmowanie_show_form")
     */
    public function showFormAction()
    {
        $odejmowanie = new Odejmowanie();
        $form = $this->createCreateForm($odejmowanie);

        return $this->render(
            'AppBundle:MajdanOdejmowanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/majdan/odejmowanie/calc", name="majdan_odejmowanie_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $odejmowanie = new Odejmowanie();
        $form = $this->createCreateForm($odejmowanie);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:MajdanOdejmowanie:wynik.html.twig',
                array('wynik' => $odejmowanie->substraction())
            );

        }

        return $this->render(
            'AppBundle:MajdanOdejmowanie:form.html.twig',
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
        $form = $this->createForm(new MajdanOdejmowanieType(), $odejmowanie, array(
            'action' => $this->generateUrl('majdan_odejmowanie_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
