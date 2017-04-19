s<?php

namespace Checkpoint2\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoryController extends Controller
{
    public function DisplayStoryAction (){
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('Checkpoint2CommitStripBundle:Card')
            ->findAll();
        $card->getPicture($story['picture'])->getNbcard($story['nbcard']);

        return $this->render('Checkpoint2CommitStripBundle:Story:story.html.twig',array('stories'=>$card,
            ));
    }
}
