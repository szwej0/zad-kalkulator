<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\furtakmVolumeType;
use furtakm\Tools\Volume;
use Symfony\Component\HttpFoundation\Request;


class furtakmVolumeController extends Controller
{

    /**
     * @Route("/furtakm/volume/show/form", name="furtakm_volume_show_form")
     */
    public function showFormAction()
    {
        $volume = new Volume();
        $form = $this->createCreateForm($volume);

        return $this->render(
            'AppBundle:furtakmVolume:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/furtakm/volume/calc", name="furtakm_volume_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $volume = new Volume();
        $form = $this->createCreateForm($volume);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:furtakmVolume:result.html.twig',
                array('result' => $volume->volume())
            );

        }

        return $this->render(
            'AppBundle:furtakmVolume:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Volumee $volume The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Volume $volume)
    {
        $form = $this->createForm(new furtakmVolumeType(), $volume, array(
            'action' => $this->generateUrl('furtakm_volume_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}
