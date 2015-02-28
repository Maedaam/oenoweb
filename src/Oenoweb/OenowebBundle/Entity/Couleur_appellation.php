<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleur_appellation
 *
 * @ORM\Table("couleur_appellation")
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Repository\Couleur_appellationRepository")
 */
class Couleur_appellation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_appellation", type="integer")
     */
    private $idAppellation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_couleur", type="integer")
     */
    private $idCouleur;


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
     * Set idAppellation
     *
     * @param integer $idAppellation
     * @return Couleur_appellation
     */
    public function setIdAppellation($idAppellation)
    {
        $this->idAppellation = $idAppellation;

        return $this;
    }

    /**
     * Get idAppellation
     *
     * @return integer 
     */
    public function getIdAppellation()
    {
        return $this->idAppellation;
    }

    /**
     * Set idCouleur
     *
     * @param integer $idCouleur
     * @return Couleur_appellation
     */
    public function setIdCouleur($idCouleur)
    {
        $this->idCouleur = $idCouleur;

        return $this;
    }

    /**
     * Get idCouleur
     *
     * @return integer 
     */
    public function getIdCouleur()
    {
        return $this->idCouleur;
    }
}
