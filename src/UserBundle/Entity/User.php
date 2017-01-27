<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use HarasBundle\Entity\Text;
use Symfony\Component\Validator\Constraints as Assert;

class User extends BaseUser
{
    static private $defaultPhotoName = "logo";

    /**
     * Set photo
     *
     * @param \HarasBundle\Entity\Media $photo
     *
     * @return User
     */
    public function setPhoto(\HarasBundle\Entity\Media $photo = null)
    {
        if($photo != null && $photo->getName() != User::getDefaultPhotoName()) {
            // L'alt définit son nom selon celui de son médium et prend un '_' juste pour rester dans l'ambiance \(o°v°o)/
            $alt = new Text();
            $alt->setName($photo->getName());
            $alt->setTextFr($photo->getName() . "_Alt_FR");
            $alt->setTextEn($photo->getName() . "_Alt_EN");
            $photo->setAlt($alt);
        }
        $this->photo = $photo;

        return $this;
    }

    protected $id;

    public function __construct()
    {
        parent::__construct();

    }

    public static function getDefaultPhotoName() {
        return User::$defaultPhotoName;
    }

    // GENERATED CODE


    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $profession;

    /**
     * @var integer
     */
    private $nbPost;

    /**
     * @var boolean
     */
    private $actif;

    /**
     * @var boolean
     */
    private $newsletter;

    /**
     * @var \HarasBundle\Entity\Media
     */
    private $photo;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return User
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set nbPost
     *
     * @param integer $nbPost
     *
     * @return User
     */
    public function setNbPost($nbPost)
    {
        $this->nbPost = $nbPost;

        return $this;
    }

    /**
     * Get nbPost
     *
     * @return integer
     */
    public function getNbPost()
    {
        return $this->nbPost;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return User
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
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return User
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Get photo
     *
     * @return \HarasBundle\Entity\Media
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
