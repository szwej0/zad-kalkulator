<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Tomek22811KalkulatorType;
use Tomek22811\Tools\Kalkulator;
class Tomek22811KalkulatorController extends Controller
{
    /**
     * @Route("/Tomek22811/kalkulator/show/form", name="Tomek22811_kalkulator_show_form")
     */
    public function showFormAction()
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        return $this->render(
            'AppBundle:Tomek22811Kalkulator:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/Tomek22811/kalkulator/calc", name="Tomek22811_kalkulator_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $kalkulator = new Kalkulator();
        $form = $this->createCreateForm($kalkulator);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:Tomek22811Kalkulator:wynik.html.twig',
                array('wynik' => $kalkulator->sum())
            );
        }
        return $this->render(
            'AppBundle:Tomek22811Kalkulator:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Kalkulator $kalkulator The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Kalkulator $kalkulator)
    {
        $form = $this->createForm(new Tomek22811KalkulatorType(), $kalkulator, array(
            'action' => $this->generateUrl('Tomek22811_kalkulator_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}