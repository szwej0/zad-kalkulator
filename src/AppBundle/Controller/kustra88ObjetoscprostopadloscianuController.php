<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kustra88ObjetoscprostopadloscianuType;
use kustra88\Tools\Objetoscprostopadloscianu;
class kustra88ObjetoscprostopadloscianuController extends Controller
{
    /**
     * @Route("/kustra88/objetoscp/show/form", name="kustra88_objetoscp_show_form")
     */
    public function showFormAction()
    {
        $objetoscprostopadloscianu = new Objetoscprostopadloscianu();
        $form = $this->createCreateForm($objetoscprostopadloscianu);
        return $this->render(
            'AppBundle:kustra88Objetoscprostopadloscianu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/kustra88/objetoscp/calc", name="kustra88_objetoscp_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $objetoscprostopadloscianu = new Objetoscprostopadloscianu();
        $form = $this->createCreateForm($objetoscprostopadloscianu);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:kustra88Objetoscprostopadloscianu:wynik.html.twig',
                array('wynik' => $objetoscprostopadloscianu->objetosc())
            );
        }
        return $this->render(
            'AppBundle:kustra88Objetoscprostopadloscianu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Objetoscprostopadloscianu $objetoscprostopadloscianu The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Objetoscprostopadloscianu $objetoscprostopadloscianu)
    {
        $form = $this->createForm(new kustra88ObjetoscprostopadloscianuType(), $objetoscprostopadloscianu, array(
            'action' => $this->generateUrl('kustra88_objetoscp_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}