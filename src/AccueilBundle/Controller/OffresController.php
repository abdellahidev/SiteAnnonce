<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OffresController extends Controller
{
    /**
     * @Route("/offres", name="offres")
     */
    public function indexAction()
    {
        return $this->render('AccueilBundle:Offres:offres.html.twig');
    }
}
