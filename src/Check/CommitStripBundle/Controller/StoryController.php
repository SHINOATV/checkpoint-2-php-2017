<?php

namespace Check\CommitStripBundle\Controller;

use Check\CommitStripBundle\Entity\Story;
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

        $stories = $em->getRepository('CheckCommitStripBundle:Story')
            ->findAll();

        return $this->render('CheckCommitStripBundle:Story:index.html.twig', array(
            'stories' => $stories));
    }

    public function showCardAction($id_story = 1, $id_card)
    {
        $em = $this->getDoctrine()->getManager();

        $story = $em->getRepository('CheckCommitStripBundle:Story')
            ->find($id_story);

        $cards=$story->getCards();
        $cardCount = sizeof($story->getCards());

        return $this->render('CheckCommitStripBundle:Story:show.html.twig', array(
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

        return $this->render('CheckCommitStripBundle:Story:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
