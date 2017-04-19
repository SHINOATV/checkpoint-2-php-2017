<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $card = $this->getDoctrine()->getRepository('WCSCommitStripBundle:Card')->findOneBynbcard($page);
        $card_previous = $this->getDoctrine()->getRepository('WCSCommitStripBundle:Card')->findOneBynbcard($page - 1);
        $card_next = $this->getDoctrine()->getRepository('WCSCommitStripBundle:Card')->findOneBynbcard($page + 1);

        return $this->render('WCSCommitStripBundle:Default:index.html.twig', array(
            'card' => $card,
            'card_previous' => $card_previous,
            'card_next' => $card_next,
        ));
    }
}
