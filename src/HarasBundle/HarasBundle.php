<?php

namespace HarasBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HarasBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
