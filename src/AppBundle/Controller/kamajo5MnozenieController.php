<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kamajo5MnozenieType;
use kamajo5\Tools\Mnozenie;

class kamajo5MnozenieController extends Controller
{
    /**
     * @Route("/kamajo5/mnozenie1/show/form", name="kamajo5_mnozenie1_show_form")
     */
    public function showFormAction()
    {
        $mnozenie = new Mnozenie();
        $form = $this->createCreateForm($mnozenie);
        return $this->render(
            'AppBundle:kamajo5Mnozenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
   /**
     * @Route("/kamajo5/mnozenie1/calc", name="kamajo5_mnozenie1_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $mnozenie = new Mnozenie();
        $form = $this->createCreateForm($mnozenie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:kamajo5Mnozenie:wynik.html.twig',
                array('wynik' => $mnozenie->objetosc())
            );
        }
        return $this->render(
           'AppBundle:kamajo5Mnozenie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Mnozenie $mnozenie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Mnozenie $mnozenie)
    {
        $form = $this->createForm(new kamajo5MnozenieType(), $mnozenie, array(
            'action' => $this->generateUrl('kamajo5_mnozenie1_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
}}