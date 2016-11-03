<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 */
class Page
{
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName() . "\tcategory: " . strval($this->getCategory());

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
     * @var \HarasBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $texts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medias;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->texts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Page
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
     * Set category
     *
     * @param \HarasBundle\Entity\Category $category
     * @return Page
     */
    public function setCategory(\HarasBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \HarasBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add texts
     *
     * @param \HarasBundle\Entity\Text $texts
     * @return Page
     */
    public function addText(\HarasBundle\Entity\Text $texts)
    {
        $this->texts[] = $texts;

        return $this;
    }

    /**
     * Remove texts
     *
     * @param \HarasBundle\Entity\Text $texts
     */
    public function removeText(\HarasBundle\Entity\Text $texts)
    {
        $this->texts->removeElement($texts);
    }

    /**
     * Get texts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * Add medias
     *
     * @param \HarasBundle\Entity\Media $medias
     * @return Page
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
     * Add articles
     *
     * @param \HarasBundle\Entity\Article $articles
     * @return Page
     */
    public function addArticle(\HarasBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \HarasBundle\Entity\Article $articles
     */
    public function removeArticle(\HarasBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
