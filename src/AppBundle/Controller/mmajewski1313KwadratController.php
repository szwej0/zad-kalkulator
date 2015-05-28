<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\mmajewski1313KwadratType;
use mmajewski1313\Tools\Kwadrat;


class mmajewski1313KwadratController extends Controller
{

    /**
     * @Route("/mmajewski1313/kwadrat/show/form", name="mmajewski1313_kwadrat_show_form")
     */
    public function showFormAction()
    {
        $kwadrat = new Kwadrat();
        $form = $this->createCreateForm($kwadrat);

        return $this->render(
            'AppBundle:mmajewski1313Kwadrat:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/mmajewski1313/kwadrat/calc", name="mmajewski1313_kwadrat_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kwadrat = new Kwadrat();
        $form = $this->createCreateForm($kwadrat);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:mmajewski1313Kwadrat:wynik.html.twig',
                array('wynik' => $kwadrat->area())
            );

        }

        return $this->render(
            'AppBundle:mmajewski1313Kwadrat:form.html.twig',
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
        $form = $this->createForm(new mmajewski1313KwadratType(), $square, array(
            'action' => $this->generateUrl('mmajewski1313_kwadrat_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
