<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class AlgoController extends Controller
{



    public function strlenOrder($string, $order) {

        $word = explode(" ", $string);

        if ($order === 'ASC'){


            usort($word,function($a,$b){return (strlen($a)>strlen($b));});

            return implode(" ",$word);

        }

        elseif ($order ==='DESC') {


            usort($word, function($a,$b){return (strlen($a)<strlen($b));});

            return implode(" ",$word);

        }

        else  {
            echo 'Il y a eu un problème !'; }

    }
}
