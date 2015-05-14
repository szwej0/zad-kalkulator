<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\furtakmRectangleType;
use furtakm\Tools\Rectangle;
use Symfony\Component\HttpFoundation\Request;


class furtakmRectangleController extends Controller
{

    /**
     * @Route("/furtakm/rectangle/show/form", name="furtakm_rectangle_show_form")
     */
    public function showFormAction()
    {
        $rectangle = new Rectangle();
        $form = $this->createCreateForm($rectangle);

        return $this->render(
            'AppBundle:furtakmRectangle:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/furtakm/rectangle/calc", name="furtakm_rectangle_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $rectangle = new Rectangle();
        $form = $this->createCreateForm($rectangle);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:furtakmRectangle:result.html.twig',
                array('result' => $rectangle->rectangle())
            );

        }

        return $this->render(
            'AppBundle:furtakmRectangle:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Rectangle $rectangle The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rectangle $rectangle)
    {
        $form = $this->createForm(new furtakmRectangleType(), $rectangle, array(
            'action' => $this->generateUrl('furtakm_rectangle_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}
