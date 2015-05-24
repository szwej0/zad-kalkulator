<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kustra88ConvertType;
use kustra88\Tools\Strings\Convert;
class kustra88ConvertbController extends Controller
{
    /**
     * @Route("/kustra88/convertb/show/form", name="kustra88_convertb_show_form")
     */
    public function showFormAction()
    {
        $convert = new Convert();
        $form = $this->createCreateForm($convert);
        return $this->render(
            'AppBundle:kustra88Convert:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/kustra88/convertb/przetworz", name="kustra88_convertb_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $convert = new Convert();
        $form = $this->createCreateForm($convert);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:kustra88Convert:wynik.html.twig',
                array('wynik' => $convert->toUpper())
            );
        }
        return $this->render(
            'AppBundle:kustra88Convert:form.html.twig',
            array(
                'form' => $form->createView()
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
    private function createCreateForm(Convert $convert)
    {
        $form = $this->createForm(new kustra88ConvertType(), $convert, array(
            'action' => $this->generateUrl('kustra88_convertb_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Przetwórz'));
        return $form;
    }
}