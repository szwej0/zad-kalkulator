<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\MajdanDzielenieType;
use Majdan\Tools\Dzielenie;


class MajdanDzielenieController extends Controller
{

    /**
     * @Route("/majdan/dzielenie/show/form", name="majdan_dzielenie_show_form")
     */
    public function showFormAction()
    {
        $dzielenie = new Dzielenie();
        $form = $this->createCreateForm($dzielenie);

        return $this->render(
            'AppBundle:MajdanDzielenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/majdan/dzielenie/calc", name="majdan_dzielenie_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $dzielenie = new Dzielenie();
        $form = $this->createCreateForm($dzielenie);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:MajdanDzielenie:wynik.html.twig',
                array('wynik' => $dzielenie->divide())
            );

        }

        return $this->render(
            'AppBundle:MajdanDzielenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Dzielenie $dzielenie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dzielenie $dzielenie)
    {
        $form = $this->createForm(new MajdanDzielenieType(), $dzielenie, array(
            'action' => $this->generateUrl('majdan_dzielenie_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
