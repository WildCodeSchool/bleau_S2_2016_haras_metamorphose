<?php

namespace CalendarBundle\Entity;


/**
 * Agenda
 */

class Agenda
{

    public function __construct ()
    {
        $newTime = new \DateTime();
        $this->setStart($newTime);
        $this->setEnd($newTime);
    }

    //  FONCTION DE METHOD UPLOAD
    public $file;

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->images = uniqid().'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->images);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    //  FONCTION DE TEST DU DOSSIER UPLOAD
    protected function getUploadDir()
    {
        return 'uploads/pictures';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->images ? null : $this->getUploadDir().'/'.$this->images;
    }

    public function getAbsolutePath()
    {
        return null === $this->images ? null : $this->getUploadRootDir().'/'.$this->images;
    }

//    GENERATED CODE
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $lieu;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var string
     */
    private $color;

    /**
     * @var boolean
     */
    private $slider;

    /**
     * @var string
     */
    private $images;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Agenda
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Agenda
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Agenda
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Agenda
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Agenda
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Agenda
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Agenda
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set slider
     *
     * @param boolean $slider
     *
     * @return Agenda
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;

        return $this;
    }

    /**
     * Get slider
     *
     * @return boolean
     */
    public function getSlider()
    {
        return $this->slider;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return Agenda
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }
}
