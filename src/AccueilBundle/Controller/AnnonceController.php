<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AccueilBundle\Form\AnnonceType;
use AccueilBundle\Entity\Annonce;



class AnnonceController extends Controller
{
    /**
     * @Route("/deposer", name="deposer")
     */
    public function deposerAction()
    {
    	/*$annonce $  new Annonce();
    	$form = $this->createFormBuilder($annonce)
    	->add('', TextType::class)
    	->add('', TextType::class)
    	->add('', TextType::class)
    	->add('', TextType::class)
    	->getForm();*/

        return $this->render('AccueilBundle:Annonce:annonce.html.twig');
    }
}
