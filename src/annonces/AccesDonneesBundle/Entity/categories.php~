<?php

namespace annonces\AccesDonneesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="annonces\AccesDonneesBundle\Repository\categoriesRepository")
 */
class categories
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
     * @ORM\Column(name="titre_categories", type="string", length=255)
     */
    private $titreCategories;


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
     * Set titreCategories
     *
     * @param string $titreCategories
     * @return categories
     */
    public function setTitreCategories($titreCategories)
    {
        $this->titreCategories = $titreCategories;

        return $this;
    }

    /**
     * Get titreCategories
     *
     * @return string 
     */
    public function getTitreCategories()
    {
        return $this->titreCategories;
    }
}
