<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WCS\CommitStripBundle\Entity\Card;
use WCS\CommitStripBundle\Entity\Story;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSCommitStripBundle:Default:index.html.twig');
    }
    public function storyAction($storyid, $nbpage)
    {

        $story = $this->getDoctrine()
            ->getRepository('WCSCommitStripBundle:Story')->find($storyid);

        $cards = $this->getDoctrine()
            ->getRepository('WCSCommitStripBundle:Card')->findByStory($story);

        $cardreturn = null;
        $previous = null;
        $next = null;
        foreach ($cards as $card){
            if ($card->getNbcard() == $nbpage){
                $cardreturn = $card;
            }
            else if ($card->getNbcard() == $nbpage - 1){
                $previous = $card;
            }
            else if ($card->getNbcard() == $nbpage + 1){
                $next = $card;
            }
        }
        return $this->render('WCSCommitStripBundle:Default:story.html.twig', array( 'card' => $cardreturn, 'previous' => $previous, 'next' => $next, 'story' => $story));
    }
    public function storylistAction(){
        $storylist = $this->getDoctrine()
            ->getRepository('WCSCommitStripBundle:Story')->findAll();
        return $this->render('WCSCommitStripBundle:Default:storylist.html.twig', array( 'stories' => $storylist));

    }

    public function addstoryAction(){
        $em = $this->getDoctrine()->getManager();
        $story = new Story();
        $story->setName($_POST['name']);
        $em->persist($story);
        $pagecount = 1;
        foreach($_POST as $params => $value){
            if (strpos($params, 'cardurl') !== false){
                $card = new Card();
                $card ->setNbcard($pagecount);
                $pagecount++;
                $card->setPicture($value);
                $card->setStory($story);
                $em->persist($card);
            }
        }
        $em->flush();
        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );
        return $this->redirectToRoute('wcs_commit_strip_storypagelist');

    }
}
