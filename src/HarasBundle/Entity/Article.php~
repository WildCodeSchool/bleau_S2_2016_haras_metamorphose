<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{

    public function __toString()
    {
        return strval($this->getTitle());
    }

//    GENERATED CODE

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \HarasBundle\Entity\Text
     */
    private $title;

    /**
     * @var \HarasBundle\Entity\Text
     */
    private $content;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Article
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
     * Set title
     *
     * @param \HarasBundle\Entity\Text $title
     * @return Article
     */
    public function setTitle(\HarasBundle\Entity\Text $title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return \HarasBundle\Entity\Text 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param \HarasBundle\Entity\Text $content
     * @return Article
     */
    public function setContent(\HarasBundle\Entity\Text $content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return \HarasBundle\Entity\Text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add medias
     *
     * @param \HarasBundle\Entity\Media $medias
     * @return Article
     */
    public function addMedia(\HarasBundle\Entity\Media $medias)
    {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param \HarasBundle\Entity\Media $medias
     */
    public function removeMedia(\HarasBundle\Entity\Media $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * Add pages
     *
     * @param \HarasBundle\Entity\Page $pages
     * @return Article
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
    /**
     * @var \HarasBundle\Entity\ArticleStructure
     */
    private $structure;


    /**
     * Set structure
     *
     * @param \HarasBundle\Entity\ArticleStructure $structure
     * @return Article
     */
    public function setStructure(\HarasBundle\Entity\ArticleStructure $structure = null)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return \HarasBundle\Entity\ArticleStructure 
     */
    public function getStructure()
    {
        return $this->structure;
    }
}
