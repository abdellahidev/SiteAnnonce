<?php

namespace annonces\AccesDonneesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces")
 * @ORM\Entity(repositoryClass="annonces\AccesDonneesBundle\Repository\AnnoncesRepository")
 */
class Annonces
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_annonce", type="string", length=255)
     */
    private $titreAnnonce;

    /**
     * @var array
     *
     * @ORM\Column(name="description", type="simple_array", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type_annonce", type="string", length=255, nullable=true)
     */
    private $typeAnnonce;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_categories", type="integer")
     */
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="categories")
     */
    private $idCategories;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_utilisateur", type="integer")
     */
    private $idUtilisateur;

    
    private $categories ;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreAnnonce
     *
     * @param string $titreAnnonce
     * @return Annonces
     */
    public function setTitreAnnonce($titreAnnonce)
    {
        $this->titreAnnonce = $titreAnnonce;

        return $this;
    }

    /**
     * Get titreAnnonce
     *
     * @return string 
     */
    public function getTitreAnnonce()
    {
        return $this->titreAnnonce;
    }

    /**
     * Set description
     *
     * @param array $description
     * @return Annonces
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return array 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set typeAnnonce
     *
     * @param string $typeAnnonce
     * @return Annonces
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return string 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Annonces
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idCategories
     *
     * @param integer $idCategories
     * @return Annonces
     */
    public function setIdCategories($idCategories)
    {
        $this->idCategories = $idCategories;

        return $this;
    }

    /**
     * Get idCategories
     *
     * @return integer 
     */
    public function getIdCategories()
    {
        return $this->idCategories;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     * @return Annonces
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}
