<?php

namespace PlateFormeBundle\Entity;

/**
 * Post
 */
class Post
{
    // Permet de convertir l'objet CHAINE DE CARACTERE
    public function __toString()
    {
        return $this->titre;
    }

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
    private $contenu;

    /**
     * @var int
     */
//    Si $parent = 1 fil de discussion
//    Si $parent = 0 commentaire
    private $parent;

    /**
     * @var int
     */
//    Si $enfant si = 0 est un fil de discussio
//    Si $enfant rempli = id de son parent
    private $enfant;

    /**
     * @var boolean
     */
    private $actif;
        /**
     * @var \PlateFormeBundle\Entity\CategoriePlateforme
     */
    private $categorie;

    /**
     * @var \UserBundle\Entity\User
     */
    private $user;

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
     * @return Post
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Post
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return Post
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set enfant
     *
     * @param integer $enfant
     *
     * @return Post
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return int
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Post
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Add enfant
     *
     * @param \PlateFormeBundle\Entity\Post $enfant
     *
     * @return Post
     */
    public function addEnfant(\PlateFormeBundle\Entity\Post $enfant)
    {
        $this->enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \PlateFormeBundle\Entity\Post $enfant
     */
    public function removeEnfant(\PlateFormeBundle\Entity\Post $enfant)
    {
        $this->enfant->removeElement($enfant);
    }



    /**
     * Set categorie
     *
     * @param \PlateFormeBundle\Entity\CategoriePlateforme $categorie
     *
     * @return Post
     */
    public function setCategorie(\PlateFormeBundle\Entity\CategoriePlateforme $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \PlateFormeBundle\Entity\CategoriePlateforme
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Post
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
