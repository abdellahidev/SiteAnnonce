<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DeposerController extends Controller
{
    /**
     * @Route("/deposer", name="deposer")
     */
    public function indexAction()
    {
        return $this->render('AccueilBundle:Deposer:deposer.html.twig');
    }
}
