<?php

namespace annonces\AccesDonneesBundle\Controller;
use annonces\AccesDonneesBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TableBundle:Default:index.html.twig');
    }
        
    /**
     * @Route("/gereran/{titre}/{prix}/{id_u}")
     */
  public function addAnnonceAction($titre,$prix,$id_u)
    {
      $em=$this->getDoctrine()->getManager();
      $annonce = new Annonces();
      $annonce->setTitreAnnonce($titre);
      $annonce->setPrix($prix);
      $annonce->setIdUtilisateur($id_u);
      $em->persist($annonce);
      $em->flush();
      return $this->render('TableBundle:Default:index.html.twig');
    }

   /**
     * @Route("/gererann")
     */
  public function newPAction()
    {
      
      $form =$this->createformbuilder()
            ->add("titreAnnonce","text")
            ->add("prix","float")
            ->add("IdUtilisateur","text")
            ->getForm();
              
     return  array('f'=> $form->createView() ) ;          
      

      //$em=$this->getDoctrine()->getManager();
      //$annonce = new Annonces();
      //$annonce->setTitreAnnonce($titre);
      //$annonce->setPrix($prix);
     // $annonce->setIdUtilisateur($id_u);
      //$em->persist($annonce);
     // $em->flush();
      
              
// return $this->render('TableBundle:Default:index.html.twig', array("f"=> $form->createView()));
    }

    
    
    }
