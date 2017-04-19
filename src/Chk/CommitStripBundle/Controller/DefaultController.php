<?php

namespace Chk\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChkCommitStripBundle:Default:index.html.twig');
    }

    public function pageAction()
    {
        return $this->render('ChkCommitStripBundle:StripV:page.html.twig');
    }

    public function page1Action()
    {
        $em = $this->getDoctrine()->getManager();
        $images= $em->getRepository('ChkCommitStripBundle:Card')->findAll();
        return $this->render('ChkCommitStripBundle:StripV:page1.html.twig', array(
            'images'=>$images,
        ));
    }

    public function page2Action()
    {
        $em = $this->getDoctrine()->getManager();
        $images= $em->getRepository('ChkCommitStripBundle:Card')->findAll();
        return $this->render('ChkCommitStripBundle:StripV:page2.html.twig', array(
            'images'=>$images,
        ));
    }

    public function page3Action()
    {
        $em = $this->getDoctrine()->getManager();
        $images= $em->getRepository('ChkCommitStripBundle:Card')->findAll();
        return $this->render('ChkCommitStripBundle:StripV:page3.html.twig', array(
            'images'=>$images,
        ));
    }

    public function page4Action()
    {
        $em = $this->getDoctrine()->getManager();
        $images= $em->getRepository('ChkCommitStripBundle:Card')->findAll();
        return $this->render('ChkCommitStripBundle:StripV:page4.html.twig', array(
            'images'=>$images,
        ));
    }
}

