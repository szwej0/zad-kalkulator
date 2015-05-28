<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\bartuuusSquareType;
use bartuuus\Tools\Square;


class bartuuusSquareController extends Controller
{

    /**
     * @Route("/bartuuus/square/show/form", name="bartuuus_square_show_form")
     */
    public function showFormAction()
    {
        $square = new Square();
        $form = $this->createCreateForm($square);

        return $this->render(
            'AppBundle:bartuuusSquare:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/bartuuus/square/calc", name="bartuuus_square_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $square = new Square();
        $form = $this->createCreateForm($square);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:bartuuusSquare:wynik.html.twig',
                array('wynik' => $square->area())
            );

        }

        return $this->render(
            'AppBundle:bartuuusSquare:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Square $square The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Square $square)
    {
        $form = $this->createForm(new bartuuusSquareType(), $square, array(
            'action' => $this->generateUrl('bartuuus_square_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
