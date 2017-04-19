<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    public function strlenOrder($string, $order) {

        $word = explode(" ", $string);

        if ($order === 'ASC'){
            function orderAsc($word,$b){
                return (strlen($word) > strlen($b)) ? 1 : -1;
            }

            usort($word, "orderAsc");

            foreach ($word as $key => $value) {
                echo "$value ";
            }
        }

        elseif ($order ==='DESC') {
            function orderDesc($word,$b){
                return (strlen($word) < strlen($b)) ? 1 : -1;
            }
            usort($word, "orderDesc");

            foreach ($word as $key => $value) {
                echo "$value ";
            }
        }

        else  {
            echo 'Il y a eu un problème !'; }
    }
}
