<?php

namespace HarasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleStructure
 */
class ArticleStructure
{
<<<<<<< HEAD
    public function __toString()
    {
        return $this->getName();
    }
=======

    public function __toString()
    {
        return strval($this->getName());
    }


    //    GENERATED CODE


>>>>>>> DevSymfonyMarielle
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * @return ArticleStructure
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
}
