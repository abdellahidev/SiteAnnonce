<?php
namespace annonces\AccesDonneesBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



   
class GererannonceControlller  extends Controller{
    //put your code here
    
    /**
     * @Route("/gereran/{$titre}")
     */
  public function addAnnonceAction($titre)
    {
      $em=$this->getDoctrine()->getManager();
      $annonce = new Annonce();
      $annonce->setTitreAnnonce($titre);
      $em->persist($annonce);
      $em->flush();
      return $this->render('TableBundle:Default:index.html.twig');
    }
    
    
    
}

