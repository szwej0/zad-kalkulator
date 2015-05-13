<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\MajdanConvertType;
use Majdan\Tools\Strings\Convert;


class MajdanConvertController extends Controller
{

    /**
     * @Route("/majdan/convert/show/form", name="majdan_convert_show_form")
     */
    public function showFormAction()
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);

        return $this->render(
            'AppBundle:MajdanConvert:form.html.twig',
            array(
                'mojNowyFormularz' => $f->createView()
            )
        );
    }

    /**
     * @Route("/majdan/convert/calc", name="majdan_convert_run")
     * @Method("POST")
     */
    public function convertAction(Request $request)
    {
        $c = new Convert();
        $f = $this->createCreateForm($c);
        $f->handleRequest($request);

        if ($f->isValid()) {

            return $this->render(
                'AppBundle:MajdanConvert:wynik.html.twig',
                array('po_konwersji' => $c->toUpper())
            );

        }

        return $this->render(
            'AppBundle:MajdanConvert:form.html.twig',
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
        $form = $this->createForm(new MajanConvertType(), $conv, array(
            'action' => $this->generateUrl('majdan_convert_run'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Przetwórz'));

        return $form;
    }

}
