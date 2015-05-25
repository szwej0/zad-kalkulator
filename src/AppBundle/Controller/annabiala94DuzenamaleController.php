<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\annabiala94DuzenamaleType;
use annabiala94\Tools\Strings\Convert;


class annabiala94DuzenamaleController extends Controller
{

    /**
     * @Route("/annabiala94/duzenamale/show/form", name="annabiala94_duzenamale_show_form")
     */
    public function showFormAction()
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);

        return $this->render(
            'AppBundle:annabiala94Duzenamale:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * @Route("/annabiala94/duzenamale/calc", name="annabiala94_duzenamale_run")
     * @Method("POST")
     */
    public function convertAction(Request $request)
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);
        $f->handleRequest($request);

        if ($f->isValid()) {

            return $this->render(
                'AppBundle:annabiala94Duzenamale:wynik.html.twig',
                array('po_konwersji' => $c->toLower())
            );

        }

        return $this->render(
            'AppBundle:annabiala94Duzenamale:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Convert $duzenamale The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convert $duzenamale)
    {
        $form = $this->createForm(new annabiala94DuzenamaleType(), $duzenamale, array(
            'action' => $this->generateUrl('annabiala94_duzenamale_run'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }

}