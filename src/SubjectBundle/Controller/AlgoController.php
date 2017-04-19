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
        $return = array();
        $split = explode(' ', $string);
        foreach ($split as $word){
            if (count($return) == 0){
                array_push($return, $word);
            }
            else{
                for ($i = 0; $i < count($return);$i++){
                    $compareword = $return[$i];
                    if ($order == 'ASC'){
                        if (strlen($word) < strlen($compareword)){
                            array_splice($return, $i, 0, $word);
                            break;
                        }
                    }
                    else{
                        if (strlen($word) > strlen($compareword)){
                            array_splice($return, $i, 0, $word);
                            break;
                        }
                    }
                }
                if (!in_array($word, $return)){
                    array_push($return, $word);
                }
            }
        }

        $return = join(' ', $return);
        return $return;
    }
}
