<?php

namespace WCS\CommitStripBundle\Controller;

use WCS\CommitStripBundle\Entity\Story;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Story controller.
 *
 */
class StoryController extends Controller
{

    public function listStoriesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stories = $em->getRepository('WCSCommitStripBundle:Story')
            ->findAll();

        return $this->render('WCSCommitStripBundle:Story:index.html.twig', array(
            'stories' => $stories));
    }

    public function showCardAction($id_story = 1, $id_card)
    {
        $em = $this->getDoctrine()->getManager();

        $story = $em->getRepository('WCSCommitStripBundle:Story')
            ->find($id_story);

        $cards=$story->getCards();
        $cardCount = sizeof($story->getCards());

        return $this->render('WCSCommitStripBundle:Story:show.html.twig', array(
            'card' => $cards[$id_card-1],
            'count' => $cardCount,
        ));
    }

    public function addStoryAction(Request $request)
    {
        $story = new Story();

        $form = $this->createFormBuilder($story)
            ->add('title')
            ->add('cards')
            ->getForm();

        return $this->render('WCSCommitStripBundle:Story:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
