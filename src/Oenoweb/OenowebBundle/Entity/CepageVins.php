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
    private $idUser;

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
     * Set idUser
     *
     * @param integer $idUser
     * @return CepageVins
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
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
