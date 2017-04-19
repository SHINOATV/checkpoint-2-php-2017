<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CardController extends Controller
{
    public function showCardAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('WCSCommitStripBundle:Card')
            ->findAll();


        return $this->render('WCSCommitStripBundle:Card:card.html.twig', array(
            'cards'=> $cards,
        ));
    }


}
