<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSCommitStripBundle:Default:index.html.twig');
    }
}
