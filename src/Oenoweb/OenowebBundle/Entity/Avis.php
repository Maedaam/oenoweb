<?php

namespace Oenoweb\OenowebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Oenoweb\OenowebBundle\Entity\AvisRepository")
 */
class Avis
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
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=40)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="notes", type="integer")
     */
    private $notes;


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
     * @return Avis
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
     * @return Avis
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

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Avis
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Avis
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Avis
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set notes
     *
     * @param integer $notes
     * @return Avis
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return integer 
     */
    public function getNotes()
    {
        return $this->notes;
    }

}
