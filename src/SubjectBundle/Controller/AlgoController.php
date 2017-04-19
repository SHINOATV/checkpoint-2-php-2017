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
        $mots = explode(' ', $string);
        $tailleTab = count($mots);

        for($i = 0; $i < $tailleTab; $i++) {
            for ($j = 0; $j < ($tailleTab - $i) ; $j++) {
                if($order === 'ASC') {
                    if (($j + 1) < $tailleTab) {
                        if (strlen($mots[$j]) > strlen($mots[$j + 1])) {
                            $temp = $mots[$j];
                            $mots[$j] = $mots[$j + 1];
                            $mots[$j + 1] = $temp;
                        }
                    }
                }
                else {
                    if (($j + 1) < $tailleTab) {
                        if (strlen($mots[$j]) < strlen($mots[$j + 1])) {
                            $temp = $mots[$j];
                            $mots[$j] = $mots[$j + 1];
                            $mots[$j + 1] = $temp;
                        }
                    }
                }
            }
        }

        $phrase = implode(' ', $mots);
        return $phrase;

    }
}
