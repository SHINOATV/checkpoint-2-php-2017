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
        $i_result = 0;
        if ($order == "ASC"){
            $a_mystring = explode(" ", $string);

            foreach ($a_mystring as $value){
                $i_current_result = strlen ($value);
                if ($i_current_result > $i_result){
                    array_push($a_mystring, $value);
                    $i_result = $i_current_result;
                }
                elseif ($i_current_result < $i_result) {
                    array_unshift($a_mystring, $value);
                    $i_result = $i_current_result;
                }
            }
            //$s_finish_result = implode(" ", $a_mystring);
            //echo $s_finish_result;
            var_dump($a_mystring);
        }

        elseif ($order == "DESC"){
            foreach ($a_mystring as $value){
                $i_current_result = strlen ($value);
                if ($i_current_result <= $i_result){
                    array_push($a_mystring, $value);
                    $i_result = $i_current_result;
                }
                elseif ($i_current_result > $i_result){
                    array_unshift($a_mystring, $value);
                    $i_result = $i_current_result;
                }
            }
            //$s_finish_result = implode(" ", $a_mystring);
            //echo $s_finish_result;
        }
    }
}
