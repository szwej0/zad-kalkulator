<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\annabiala94PolekwadratuType;
use annabiala94\Tools\Polekwadratu;
use Symfony\Component\HttpFoundation\Request;


class annabiala94PolekwadratuController extends Controller
{

    /**
     * @Route("/annabiala94/polekwadratu/show/form", name="annabiala94_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:annabiala94Polekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/polekwadratu/calc", name="annabiala94_polekwadratu_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Polekwadratu:result.html.twig',
                array('result' => $polekwadratu->polekwadratu())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Polekwadratu:form.html.twig',
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
        $form = $this->createForm(new annabiala94PolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('annabiala94_polekwadratu_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}