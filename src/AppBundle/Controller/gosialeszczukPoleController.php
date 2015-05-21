<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\gosialeszczukPoleType;
use gosialeszczuk\Tools\Pole;
class gosialeszczukPoleController extends Controller
{
    /**
     * @Route("/gosialeszczuk/pole/show/form", name="gosialeszczuk_pole_show_form")
     */
    public function showFormAction()
    {
        $pole = new Pole();
        $form = $this->createCreateForm($pole);
        return $this->render(
            'AppBundle:gosialeszczukPole:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/gosialeszczuk/pole/calc", name="gosialeszczuk_pole_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $pole = new Pole();
        $form = $this->createCreateForm($pole);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:gosialeszczukPole:wynik.html.twig',
                array('wynik' => $pole->area())
            );
        }
        return $this->render(
            'AppBundle:gosialeszczukPole:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Pole $pole The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pole $pole)
    {
        $form = $this->createForm(new gosialeszczukPoleType(), $pole, array(
            'action' => $this->generateUrl('gosialeszczuk_pole_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}