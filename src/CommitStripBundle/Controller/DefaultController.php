<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommitStripBundle:Default:index.html.twig');
    }

    public function cardAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('CommitStripBundle:Card')
            ->findAll();

        return $this->render('CommitStripBundle:Default:card.html.twig', array(
            'cards'=> $cards,

        ));
    }
}
