<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaracteristiqueVins
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Entity\CaracteristiqueVinsRepository")
 */
class CaracteristiqueVins
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
     * @ORM\Column(name="id_vin", type="integer")
     */
    private $idVin;


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
     * @return CaracteristiqueVins
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
     * Set idVin
     *
     * @param integer $idVin
     * @return CaracteristiqueVins
     */
    public function setIdVin($idVin)
    {
        $this->idVin = $idVin;

        return $this;
    }

    /**
     * Get idVin
     *
     * @return integer 
     */
    public function getIdVin()
    {
        return $this->idVin;
    }
}
