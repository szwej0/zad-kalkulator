<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\kustra88PolekwadratuType;
use kustra88\Tools\Polekwadratu;


class kustra88PolekwadratuController extends Controller
{

    /**
     * @Route("/kustra88/polekwadratu/show/form", name="kustra88_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);

        return $this->render(
            'AppBundle:kustra88Polekwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/kustra88/polekwadratu/calc", name="kustra88_polekwadratu_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new Polekwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:kustra88Polekwadratu:wynik.html.twig',
                array('wynik' => $polekwadratu->polekwadratu())
            );

        }

        return $this->render(
            'AppBundle:kustra88Polekwadratu:form.html.twig',
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
        $form = $this->createForm(new kustra88PolekwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('kustra88_polekwadratu_wynik'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
