<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CardController extends Controller
{
    public function showCardAction($nbcard)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('WCSCommitStripBundle:Card')
            ->findOneBynbcard($nbcard);

        $cardnext = $em->getRepository('WCSCommitStripBundle:Card')
            ->findOneBynbcard($nbcard+1);

        $cardprev = $em->getRepository('WCSCommitStripBundle:Card')
            ->findOneBynbcard($nbcard-1);

        return $this->render('WCSCommitStripBundle:Card:card.html.twig', array(
            'card'=> $card,
            'cardnext'=>$cardnext,
            'cardprev'=>$cardprev,
        ));
    }


}
