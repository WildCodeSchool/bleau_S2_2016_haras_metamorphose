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
    	$langSession = $request->getLocale();
        if($langChoice)
        {
            $request->getSession()->set('_locale', $langChoice);
        }
        else
        {
        	if($langSession!='fr' && $langSession!='en')
        		$request->getSession()->set('_locale', 'en');
        }
    }
}