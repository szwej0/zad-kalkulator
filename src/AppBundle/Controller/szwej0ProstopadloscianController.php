<?php
namespace AppBundle\Controller;
use AppBundle\Form\szwej0PoleProstopadloscianuType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kzolnierzObjprostopadloscianuType;
use szwej0\Tools\PoleProstopadloscianu;
class szwej0ProstopadloscianController extends Controller
{
    /**
     * @Route("/szwej0/Prostopadloscian/show/form", name="szwej0Prostopadloscian_show_form")
     */
    public function showFormAction()
    {
        $objprostopadloscianu = new PoleProstopadloscianu();
        $form = $this->createCreateForm($objprostopadloscianu);
        return $this->render(
            'AppBundle:szwej0PoleProstopadloscianu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/szwej0/szwej0Prostopadloscian/calc", name="szwej0PoleProstopadloscianu_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $objprostopadloscianu = new PoleProstopadloscianu();
        $form = $this->createCreateForm($objprostopadloscianu);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:szwej0PoleProstopadloscianu:wynik.html.twig',
                array('wynik' => $objprostopadloscianu->objPP())
            );
        }
        return $this->render(
            'AppBundle:szwej0PoleProstopadloscianu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param PoleProstopadloscianu $objprostopadloscianu The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PoleProstopadloscianu $objprostopadloscianu)
    {
        $form = $this->createForm(new szwej0PoleProstopadloscianuType(), $objprostopadloscianu, array(
            'action' => $this->generateUrl('szwej0PoleProstopadloscianu_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}