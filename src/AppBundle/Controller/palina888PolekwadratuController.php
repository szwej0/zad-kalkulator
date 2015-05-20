<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\palina888PolekwadratuType;
use palina888\Tools\Polekwadratu;
use Symfony\Component\HttpFoundation\Request;


class palina888PolekwadratuController extends Controller
{

    /**
     * @Route("/palina888/polekwadratu/show/form", name="palina888_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:palina888Polekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/palina888/polekwadratu/calc", name="palina888_polekwadratu_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:palina888Polekwadratu:result.html.twig',
                array('result' => $polekwadratu->polekwadratu())
            );

        }

        return $this->render(
            'AppBundle:palina888Polekwadratu:form.html.twig',
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
        $form = $this->createForm(new palina888PolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('palina888_polekwadratu_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}