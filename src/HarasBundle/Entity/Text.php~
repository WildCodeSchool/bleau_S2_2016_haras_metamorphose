<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Text
 */
class Text
{
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
    private $articleTexts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articleVideos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articleSliders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $links;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articleTexts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articleVideos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->articleSliders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add articleTexts
     *
     * @param \HarasBundle\Entity\ArticleText $articleTexts
     * @return Text
     */
    public function addArticleText(\HarasBundle\Entity\ArticleText $articleTexts)
    {
        $this->articleTexts[] = $articleTexts;

        return $this;
    }

    /**
     * Remove articleTexts
     *
     * @param \HarasBundle\Entity\ArticleText $articleTexts
     */
    public function removeArticleText(\HarasBundle\Entity\ArticleText $articleTexts)
    {
        $this->articleTexts->removeElement($articleTexts);
    }

    /**
     * Get articleTexts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticleTexts()
    {
        return $this->articleTexts;
    }

    /**
     * Add articleVideos
     *
     * @param \HarasBundle\Entity\ArticleVideo $articleVideos
     * @return Text
     */
    public function addArticleVideo(\HarasBundle\Entity\ArticleVideo $articleVideos)
    {
        $this->articleVideos[] = $articleVideos;

        return $this;
    }

    /**
     * Remove articleVideos
     *
     * @param \HarasBundle\Entity\ArticleVideo $articleVideos
     */
    public function removeArticleVideo(\HarasBundle\Entity\ArticleVideo $articleVideos)
    {
        $this->articleVideos->removeElement($articleVideos);
    }

    /**
     * Get articleVideos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticleVideos()
    {
        return $this->articleVideos;
    }

    /**
     * Add articleSliders
     *
     * @param \HarasBundle\Entity\ArticleSlider $articleSliders
     * @return Text
     */
    public function addArticleSlider(\HarasBundle\Entity\ArticleSlider $articleSliders)
    {
        $this->articleSliders[] = $articleSliders;

        return $this;
    }

    /**
     * Remove articleSliders
     *
     * @param \HarasBundle\Entity\ArticleSlider $articleSliders
     */
    public function removeArticleSlider(\HarasBundle\Entity\ArticleSlider $articleSliders)
    {
        $this->articleSliders->removeElement($articleSliders);
    }

    /**
     * Get articleSliders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticleSliders()
    {
        return $this->articleSliders;
    }

    /**
     * Add links
     *
     * @param \HarasBundle\Entity\Link $links
     * @return Text
     */
    public function addLink(\HarasBundle\Entity\Link $links)
    {
        $this->links[] = $links;

        return $this;
    }

    /**
     * Remove links
     *
     * @param \HarasBundle\Entity\Link $links
     */
    public function removeLink(\HarasBundle\Entity\Link $links)
    {
        $this->links->removeElement($links);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Add pages
     *
     * @param \HarasBundle\Entity\Page $pages
     * @return Text
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
}
