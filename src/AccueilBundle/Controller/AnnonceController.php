<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AccueilBundle\Form\AnnonceType;
use AccueilBundle\Entity\Annonce;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class AnnonceController extends Controller
{
    /**
     * @Route("/deposer", name="deposer")
     */
    public function deposerAction(Request $request)
    {
        $Annonce = new Annonce();
        $form = $this->createFormBuilder($Annonce)
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->getForm();

        return $this->render('AccueilBundle:Deposer:deposer.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
