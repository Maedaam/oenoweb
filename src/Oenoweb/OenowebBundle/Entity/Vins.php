<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vins
 *
 * @ORM\Table("vins")
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Repository\VinsRepository")
 */
class Vins
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="domaine", type="integer")
     */
    private $domaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="couleur", type="integer")
     */
    private $couleur;

    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer")
     */
    private $region;


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
     * Set nom
     *
     * @param string $nom
     * @return Vins
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set domaine
     *
     * @param integer $domaine
     * @return Vins
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return integer 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set couleur
     *
     * @param integer $couleur
     * @return Vins
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return integer 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return Vins
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }
}
