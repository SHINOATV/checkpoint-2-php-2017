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
		$a_words = preg_split('/\s/', $string);

		// LAZY WAY
		/*
		$a_sorted_words = array();

		foreach ($a_words as $key => $value) {
			$a_sorted_words[strlen($value)] = $value;
		}

		if($order === 'DESC'){
			krsort($a_sorted_words);
		}else{
			ksort($a_sorted_words);			
		}		
		return implode(' ', $a_sorted_words);
		*/
		
		usort($a_words, function($a, $b) {
			return strlen($b) - strlen($a);
		});

		if($order === 'ASC'){
			$a_words = array_reverse($a_words);
		}
		return implode(' ', $a_words);
	}
}
