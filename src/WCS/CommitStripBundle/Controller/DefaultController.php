<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WCS\CommitStripBundle\Entity\Card;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('WCSCommitStripBundle:Card')
            ->find($id);

        return $this->render('WCSCommitStripBundle:Default:index.html.twig', array(

            "card"=>$card,
        ));
    }
}
