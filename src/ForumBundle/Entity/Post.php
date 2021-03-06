<?php

namespace ForumBundle\Entity;

/**
 * Post
 */
class Post
{
    public function __toString()
    {
        return $this->titre;
    }

    // GENERATED CODE //


    /**
     * @var integer
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
     * @var boolean
     */
    private $actif;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enfant;

    /**
     * @var \ForumBundle\Entity\Post
     */
    private $parent;

    /**
     * @var \ForumBundle\Entity\CategoriePlateforme
     */
    private $categorie;

    /**
     * @var \UserBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enfant = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @param \ForumBundle\Entity\Post $enfant
     *
     * @return Post
     */
    public function addEnfant(\ForumBundle\Entity\Post $enfant)
    {
        $this->enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \ForumBundle\Entity\Post $enfant
     */
    public function removeEnfant(\ForumBundle\Entity\Post $enfant)
    {
        $this->enfant->removeElement($enfant);
    }

    /**
     * Get enfant
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set parent
     *
     * @param \ForumBundle\Entity\Post $parent
     *
     * @return Post
     */
    public function setParent(\ForumBundle\Entity\Post $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ForumBundle\Entity\Post
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set categorie
     *
     * @param \ForumBundle\Entity\CategoriePlateforme $categorie
     *
     * @return Post
     */
    public function setCategorie(\ForumBundle\Entity\CategoriePlateforme $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \ForumBundle\Entity\CategoriePlateforme
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
    /**
     * @var \DateTime
     */
    private $dateCreate;


    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Post
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }
}
