<?php

namespace HarasBundle\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class languageChange extends Controller
{
// take the language in the user's session, if it's not a vaid choice select engish by default, if 
// a language has been selected, put it in the session _locale.
    public function select(Request $request, $langChoice)
    {
        if($langChoice)
        {
            $request->getSession()->set('_locale', $langChoice);
            $request->getSession()->set('defaultLocale', $langChoice);
        }
        if($request->getSession()->get('defaultLocale') == null)
        {
            if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
            {
                $langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
                $choice=$langs[0];
                if($choice!='fr' && $choice!='en')
                {
                    $request->getSession()->set('_locale', 'en');
                }
                else
                {
                    $request->getSession()->set('_locale', $choice);
                }
            }
            else
            {
                $request->getSession()->set('_locale', 'en');
            }
        }
    }
        
}