<?php

namespace HarasBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class User extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
