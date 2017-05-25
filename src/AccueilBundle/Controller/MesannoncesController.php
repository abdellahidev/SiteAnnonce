<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MesannoncesController extends Controller
{
    /**
     * @Route("/mesannonces", name="mesannonces")
     */
    public function indexAction()
    {
        return $this->render('AccueilBundle:Mesannonces:mesannonces.html.twig');
    }
}
