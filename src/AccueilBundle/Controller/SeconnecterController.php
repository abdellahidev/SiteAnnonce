<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SeconnecterController extends Controller
{
    /**
     * @Route("/seconnecter", name="seconnecter")
     */
    public function indexAction()
    {
        return $this->render('AccueilBundle:Seconnecter:seconnecter.html.twig');
    }
}
