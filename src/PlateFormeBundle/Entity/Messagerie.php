<?php

namespace PlateFormeBundle\Entity;

/**
 * Messagerie
 */
class Messagerie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $message;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Messagerie
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
     * Set message
     *
     * @param string $message
     *
     * @return Messagerie
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @var \UserBundle\Entity\User
     */
    private $emmeteur;

    /**
     * @var \UserBundle\Entity\User
     */
    private $recepteur;


    /**
     * Set emmeteur
     *
     * @param \UserBundle\Entity\User $emmeteur
     *
     * @return Messagerie
     */
    public function setEmmeteur(\UserBundle\Entity\User $emmeteur = null)
    {
        $this->emmeteur = $emmeteur;

        return $this;
    }

    /**
     * Get emmeteur
     *
     * @return \UserBundle\Entity\User
     */
    public function getEmmeteur()
    {
        return $this->emmeteur;
    }

    /**
     * Set recepteur
     *
     * @param \UserBundle\Entity\User $recepteur
     *
     * @return Messagerie
     */
    public function setRecepteur(\UserBundle\Entity\User $recepteur = null)
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    /**
     * Get recepteur
     *
     * @return \UserBundle\Entity\User
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }
}
