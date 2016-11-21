<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Media
 */
class Media
{

    // Variable temporaire pour upload de fichier
    private $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($rondoudou)
    {
        $this->file = $rondoudou;
        return $this;
    }

    public function getMediaTranslation($language)
    {
        $mediaRendering = [];
        $mediaAlt = $this->getAlt();
        $mediaPath = $this->getPath();
        $mediaRendering['alt'] = $mediaAlt->getTranslation($language);
        $mediaRendering['path'] = $mediaPath;
        return $mediaRendering;
    }

    function __toString()
    {
        return $this->getName() . " | " . $this->getPath();
    }

    //    GENERATED CODE

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->file = null;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \HarasBundle\Entity\Text
     */
    private $alt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pages;

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
     * Set name
     *
     * @param string $name
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set alt
     *
     * @param \HarasBundle\Entity\Text $alt
     * @return Media
     */
    public function setAlt(\HarasBundle\Entity\Text $alt = null)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return \HarasBundle\Entity\Text 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Add pages
     *
     * @param \HarasBundle\Entity\Page $pages
     * @return Media
     */
    public function addPage(\HarasBundle\Entity\Page $pages)
    {
        $this->pages[] = $pages;

        return $this;
    }

    /**
     * Remove pages
     *
     * @param \HarasBundle\Entity\Page $pages
     */
    public function removePage(\HarasBundle\Entity\Page $pages)
    {
        $this->pages->removeElement($pages);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPages()
    {
        return $this->pages;
    }
}
