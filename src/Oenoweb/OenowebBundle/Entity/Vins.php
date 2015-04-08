<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vins
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Entity\VinsRepository")
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
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=30)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=50)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=20)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="aoc", type="string" , length=40)
     */
    private $aoc;


    /**
     * @var string
     *
     * @ORM\Column(name="photoVins", type="string"  ,length=130, options={"default" = "https://scontent-cdg.xx.fbcdn.net/hphotos-frc3/t31.0-8/903790_4932022263693_683318828_o.jpg" })
     */
    private $photoVins; 



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
     * Set photoVins
     *
     * @param string $photoVins
     * @return Vins
     */
    public function setphotoVins($photoVins)
    {
        $this->photoVins = $photoVins;

        return $this;
    }

    /**
     * Get photoVins
     *
     * @return string 
     */
    public function getPhotoVins()
    {
        return $this->photoVins;

    }

    /**
     * Set region
     *
     * @param string $region
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
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
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
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
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
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set aoc
     *
     * @param string $aoc
     * @return Vins
     */
    public function setAoc($aoc)
    {
        $this->aoc = $aoc;

        return $this;
    }

    /**
     * Get aoc
     *
     * @return string 
     */
    public function getaoc()
    {
        return $this->aoc;
    }
}
