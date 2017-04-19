<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\CommitStripBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SubjectBundleBundle:Default:index.html.twig');
    }
    public function showStoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $story = $em->getRepository('CommitStripBundle:Card')->findOneById($id);
        $story->getPicture();
        return $this->render("CommitStripBundle:Default:story.html.twig", array(
            'card' => $story,
        ));

    }
}
