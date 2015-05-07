<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\GajdawConvertType;
use Gajdaw\Tools\Strings\Convert;


class GajdawConvertController extends Controller
{

    /**
     * @Route("/gajdaw/convert/show/form", name="gajdaw_convert_show_form")
     */
    public function showFormAction()
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);

        return $this->render(
            'AppBundle:GajdawConvert:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * @Route("/gajdaw/convert/calc", name="gajdaw_convert_run")
     * @Method("POST")
     */
    public function convertAction(Request $request)
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);
        $f->handleRequest($request);

        if ($f->isValid()) {

            return $this->render(
                'AppBundle:GajdawConvert:wynik.html.twig',
                array('po_konwersji' => $c->toLower())
            );

        }

        return $this->render(
            'AppBundle:GajdawConvert:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Convert $convert The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Convert $conv)
    {
        $form = $this->createForm(new GajdawConvertType(), $conv, array(
            'action' => $this->generateUrl('gajdaw_convert_run'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }

}
