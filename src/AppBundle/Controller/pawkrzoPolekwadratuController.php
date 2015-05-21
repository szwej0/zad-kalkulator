<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\pawkrzoPolekwadratuType;
use pawkrzo\Tools\Polekwadratu;


class pawkrzoPolekwadratuController extends Controller
{

    /**
     * @Route("/pawkrzo/polekwadratu/show/form", name="pawkrzo_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:pawkrzoPolekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/pawkrzo/polekwadratu/calc", name="pawkrzo_polekwadratu_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:pawkrzoPolekwadratu:wynik.html.twig',
                array('wynik' => $polekwadratu->squared())
            );

        }

        return $this->render(
            'AppBundle:pawkrzoPolekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Polekwadratu $polekwadratu The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Polekwadratu $polekwadratu)
    {
        $form = $this->createForm(new pawkrzoPolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('pawkrzo_polekwadratu_wynik'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
