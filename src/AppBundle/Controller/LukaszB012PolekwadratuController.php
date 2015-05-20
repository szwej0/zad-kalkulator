<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\LukaszB012PolekwadratuType;
use LukaszB012\Tools\Polekwadratu;
use Symfony\Component\HttpFoundation\Request;


class LukaszB012PolekwadratuController extends Controller
{

    /**
     * @Route("/LukaszB012/polekwadratu/show/form", name="LukaszB012_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:LukaszB012Polekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/LukaszB012/polekwadratu/calc", name="LukaszB012_polekwadratu_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:LukaszB012Polekwadratu:result.html.twig',
                array('result' => $polekwadratu->polekwadratu())
            );

        }

        return $this->render(
            'AppBundle:LukaszB012Polekwadratu:form.html.twig',
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
        $form = $this->createForm(new LukaszB012PolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('LukaszB012_polekwadratu_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}