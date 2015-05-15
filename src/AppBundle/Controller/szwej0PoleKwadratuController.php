<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\szwej0PoleKwadratuType;
use szwej0\Tools\PoleKwadratu;
use Symfony\Component\HttpFoundation\Request;
class szwej0PoleKwadratuController extends Controller
{
    /**
     * @Route("/szwej0/polekwadratu/show/form", name="szwej0_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $polekwadratu = new PoleKwadratu();
        $form = $this->createCreateForm($polekwadratu);
        return $this->render(
            'AppBundle:szwej0PoleKwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/szwej0/PoleKwadratu/calc", name="szwej0PoleKwadratu_wyniki")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $polekwadratu = new PoleKwadratu();
        $form = $this->createCreateForm($polekwadratu);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:szwej0PoleKwadratu:wynik.html.twig',
                array('wynik' => $polekwadratu->pole())
            );
        }
        return $this->render(
            'AppBundle:szwej0PoleKwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param PoleKwadratu $polekwadratu The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Polekwadratu $polekwadratu)
    {
        $form = $this->createForm(new szwej0PoleKwadratuType(), $polekwadratu, array(
            'action' => $this->generateUrl('szwej0PoleKwadratu_wyniki'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}