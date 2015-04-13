<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CepageVins
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Entity\CepageVinsRepository")
 */
class CepageVins
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
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idVins;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cepage", type="integer")
     */
    private $idCepage;


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
     * Set idVins
     *
     * @param integer $idVins
     * @return CepageVins
     */
    public function setIdVins($idVins)
    {
        $this->idVins = $idVins;

        return $this;
    }

    /**
     * Get idVins
     *
     * @return integer 
     */
    public function getIdVins()
    {
        return $this->idVins;
    }

    /**
     * Set idCepage
     *
     * @param integer $idCepage
     * @return CepageVins
     */
    public function setIdCepage($idCepage)
    {
        $this->idCepage = $idCepage;

        return $this;
    }

    /**
     * Get idCepage
     *
     * @return integer 
     */
    public function getIdCepage()
    {
        return $this->idCepage;
    }
}
