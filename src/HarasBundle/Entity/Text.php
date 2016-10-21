<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Text
 */
class Text
{
    public function __toString()
    {
        return $this->getName();
    }

    public function getTranslation(string $language)
    {
        if ($language == 'fr')
            return $this->getTextFr();
        else
            return $this->getTextEn();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles_title = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articles_content = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
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
    private $textFr;

    /**
     * @var string
     */
    private $textEn;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles_title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles_content;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $medias;

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
     * @return Text
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
     * Set textFr
     *
     * @param string $textFr
     * @return Text
     */
    public function setTextFr($textFr)
    {
        $this->textFr = $textFr;

        return $this;
    }

    /**
     * Get textFr
     *
     * @return string 
     */
    public function getTextFr()
    {
        return $this->textFr;
    }

    /**
     * Set textEn
     *
     * @param string $textEn
     * @return Text
     */
    public function setTextEn($textEn)
    {
        $this->textEn = $textEn;

        return $this;
    }

    /**
     * Get textEn
     *
     * @return string 
     */
    public function getTextEn()
    {
        return $this->textEn;
    }

    /**
     * Add articles_title
     *
     * @param \HarasBundle\Entity\Article $articlesTitle
     * @return Text
     */
    public function addArticlesTitle(\HarasBundle\Entity\Article $articlesTitle)
    {
        $this->articles_title[] = $articlesTitle;

        return $this;
    }

    /**
     * Remove articles_title
     *
     * @param \HarasBundle\Entity\Article $articlesTitle
     */
    public function removeArticlesTitle(\HarasBundle\Entity\Article $articlesTitle)
    {
        $this->articles_title->removeElement($articlesTitle);
    }

    /**
     * Get articles_title
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticlesTitle()
    {
        return $this->articles_title;
    }

    /**
     * Add articles_content
     *
     * @param \HarasBundle\Entity\Article $articlesContent
     * @return Text
     */
    public function addArticlesContent(\HarasBundle\Entity\Article $articlesContent)
    {
        $this->articles_content[] = $articlesContent;

        return $this;
    }

    /**
     * Remove articles_content
     *
     * @param \HarasBundle\Entity\Article $articlesContent
     */
    public function removeArticlesContent(\HarasBundle\Entity\Article $articlesContent)
    {
        $this->articles_content->removeElement($articlesContent);
    }

    /**
     * Get articles_content
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticlesContent()
    {
        return $this->articles_content;
    }

    /**
     * Add medias
     *
     * @param \HarasBundle\Entity\Media $medias
     * @return Text
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
     * @return Text
     */
    public function addPage(\HarasBundle\Entity\Page $page)
    {
        $page->addText($this);
        $this->pages[] = $page;
        return $this;
    }

    /**
     * Remove pages
     *
     * @param \HarasBundle\Entity\Page $pages
     */
    public function removePage(\HarasBundle\Entity\Page $page)
    {
        $page->getTexts()->removeElement($this);
        $this->pages->removeElement($page);
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
