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

    	$tblChaine=explode(" ", $string);
    	$taille=count($tblChaine);
		$temp;
	    $flgPermut=true;
	    for(;$flgPermut==true;){
	        $flgPermut=false;
	        for($i=0;$i < $taille - 1;$i++){
	        	if ($order=="ASC"){
		        	if (strlen($tblChaine[$i])>strlen($tblChaine[$i+1])) {
		                $temp=$tblChaine[$i+1];
		                $tblChaine[$i+1]=$tblChaine[$i];
		                $tblChaine[$i]=$temp;
		                $flgPermut=true;
		            } 
		        }
		        else {
						if (strlen($tblChaine[$i])<strlen($tblChaine[$i+1])) {
			                $temp=$tblChaine[$i+1];
			                $tblChaine[$i+1]=$tblChaine[$i];
			                $tblChaine[$i]=$temp;
			                $flgPermut=true;
			             }

		        }
	        }  
	    }
	    $resu=$tblChaine[0];
	    for($i=1;$i < $taille;$i++){
	    	$resu=$resu." ".$tblChaine[$i];
	    }
	    return $resu;

	}
}
