<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //
    public function strlenOrder($string, $order)
    {
    $string = 'il fait chaud';
    $string = explode("", $string);

    for($i=0;$i<strlen($string);$i++)
    {
        echo "$string[$i]";
    }

    }
}
