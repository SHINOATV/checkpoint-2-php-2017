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
        $words = explode(" ", $string);

        for ($ind = sizeof($words) - 1; $ind > 0; $ind--) {
            for ($pos = 0; $pos < $ind; $pos++) {
                $currentWordLenght = strlen($words[$pos]);
                $nextWordLenght = strlen($words[$pos + 1]);

                if (($order === "ASC" && $currentWordLenght > $nextWordLenght)
                    ||($order === "DESC" && $currentWordLenght < $nextWordLenght)) {
                    $tempWord = $words[$pos];
                    $words[$pos] = $words[$pos + 1];
                    $words[$pos + 1] = $tempWord;
                }
            }
        }

        $sortedString = implode(" ", $words);
        return $sortedString;
    }
}
