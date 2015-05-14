<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Konradha9PolekwadratuType;
use Konradha9\Tools\Polekwadratu;
use Symfony\Component\HttpFoundation\Request;


class Konradha9PolekwadratuController extends Controller
{

    /**
     * @Route("/Konradha9/polekwadratu/show/form", name="Konradha9_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:Konradha9Polekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/Konradha9/polekwadratu/calc", name="Konradha9_polekwadratu_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:Konradha9Polekwadratu:result.html.twig',
                array('result' => $polekwadratu->polekwadratu())
            );

        }

        return $this->render(
            'AppBundle:Konradha9Polekwadratu:form.html.twig',
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
        $form = $this->createForm(new Konradha9PolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('Konradha9_polekwadratu_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}