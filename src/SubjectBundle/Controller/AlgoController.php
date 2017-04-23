<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function strlenOrder($phrase, $ordre)
    {
        $mots = explode(" ", $phrase);
        for ($indice = sizeof($mots) - 1; $indice > 0; $indice--) 
        {
            for ($position = 0; $position < $indice; $position++) 
            {
             $tailleMotCourant = strlen($mots[$position]);
             $tailleMotSuivant = strlen($mots[1 + $position]);
                if (($ordre === "ASC" && $tailleMotCourant > $tailleMotSuivant) ||($ordre === "DESC" && $tailleMotCourant < $tailleMotSuivant)) 
                {
                    $tmp = $mots[$position];
                    $mots[$position] = $mots[$position + 1];
                    $mots[$position + 1] = $tmp;
                }
            }
        }
        $reconditionne = implode(" ", $mots);
        return $reconditionne;
    }
}
