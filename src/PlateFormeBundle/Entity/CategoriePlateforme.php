<?php

namespace PlateFormeBundle\Entity;

/**
 * CategoriePlateforme
 */
class CategoriePlateforme
{
    // Permet de convertir l'objet CATEGORIE dans MODELE en CHAINE DE CARACTERE
    public function __toString()
    {
        return $this->nom;
    }

    // GENERATED CODE //

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enfant;

    /**
     * @var \PlateFormeBundle\Entity\CategoriePlateforme
     */
    private $parent;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return CategoriePlateforme
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
     * Set actif
     *
     * @param boolean $actif
     *
     * @return CategoriePlateforme
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
     * @param \PlateFormeBundle\Entity\CategoriePlateforme $enfant
     *
     * @return CategoriePlateforme
     */
    public function addEnfant(\PlateFormeBundle\Entity\CategoriePlateforme $enfant)
    {
        $this->enfant[] = $enfant;

        return $this;
    }

    /**
     * Remove enfant
     *
     * @param \PlateFormeBundle\Entity\CategoriePlateforme $enfant
     */
    public function removeEnfant(\PlateFormeBundle\Entity\CategoriePlateforme $enfant)
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
     * @param \PlateFormeBundle\Entity\CategoriePlateforme $parent
     *
     * @return CategoriePlateforme
     */
    public function setParent(\PlateFormeBundle\Entity\CategoriePlateforme $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \PlateFormeBundle\Entity\CategoriePlateforme
     */
    public function getParent()
    {
        return $this->parent;
    }
}
