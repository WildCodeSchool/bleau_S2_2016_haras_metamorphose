<?php

namespace PlateFormeBundle\Entity;

/**
 * CategoriePlateforme
 */
class CategoriePlateforme
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var bool
     */
    private $actif;

    /**
     * @var bool
     */
    private $parent;

    /**
     * @var int
     */
    private $enfant;


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
     * @return bool
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set parent
     *
     * @param boolean $parent
     *
     * @return CategoriePlateforme
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return bool
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
     * @return CategoriePlateforme
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
}
