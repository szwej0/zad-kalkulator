<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\krzysztof90ProstopType;
use krzysztof90\Tools\Prostop;


class krzysztof90ProstopController extends Controller
{

    /**
     * @Route("/krzysztof90/prostop/show/form", name="krzysztof90_prostop_show_form")
     */
    public function showFormAction()
    {
        $prostop = new Prostop();
        $form = $this->createCreateForm($prostop);

        return $this->render(
            'AppBundle:krzysztof90Prostop:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/krzysztof90/prostop/calc", name="krzysztof90_prostop_licz")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $prostop = new Prostop();
        $form = $this->createCreateForm($prostop);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:krzysztof90Prostop:wynik.html.twig',
                array('wynik' => $prostop->volume())
            );

        }

        return $this->render(
            'AppBundle:krzysztof90Prostop:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Prostop $prostop The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prostop $prostop)
    {
        $form = $this->createForm(new krzysztof90ProstopType(), $prostop, array(
            'action' => $this->generateUrl('krzysztof90_prostop_licz'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}
