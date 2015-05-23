<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\PawloPoleKwadratuType;
use pawlo\Tools\PawloPoleKwadratu;
class PawloPoleKwadratuController extends Controller
{
    /**
     * @Route("/pawlo/polekwadratu/show/form", name="pawlo_polekwadratu_show_form")
     */
    public function showFormAction()
    {
        $c = new PawloPoleKwadratu();
        $form = $this->createCreateForm($c);
        return $this->render(
            'AppBundle:pawloPoleKwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/pawlo/polekwadratu/calc", name="pawlo_polekwadratu_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $c = new PawloPoleKwadratu();
        $form = $this->createCreateForm($c);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:pawloPoleKwadratu:wynik.html.twig',
                array('wynik' => $c->area())
            );
        }
        return $this->render(
            'AppBundle:pawloPoleKwadratu:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param PawloPoleKwadratu $c The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PawloPoleKwadratu $c)
    {
        $form = $this->createForm(new PawloPoleKwadratuType(), $c, array(
            'action' => $this->generateUrl('pawlo_polekwadratu_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
   }
}