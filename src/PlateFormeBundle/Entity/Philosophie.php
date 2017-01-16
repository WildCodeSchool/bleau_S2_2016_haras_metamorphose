<?php

namespace PlateFormeBundle\Entity;

/**
 * Philosophie
 */
class Philosophie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $texte;


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
     * Set texte
     *
     * @param string $texte
     *
     * @return Philosophie
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }
    /**
     * @var string
     */
    private $title1;

    /**
     * @var string
     */
    private $title2;


    /**
     * Set title1
     *
     * @param string $title1
     *
     * @return Philosophie
     */
    public function setTitle1($title1)
    {
        $this->title1 = $title1;

        return $this;
    }

    /**
     * Get title1
     *
     * @return string
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set title2
     *
     * @param string $title2
     *
     * @return Philosophie
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return string
     */
    public function getTitle2()
    {
        return $this->title2;
    }
}
