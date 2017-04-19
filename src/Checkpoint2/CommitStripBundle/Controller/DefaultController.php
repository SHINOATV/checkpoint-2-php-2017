<?php

namespace Checkpoint2\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Checkpoint2CommitStripBundle:Default:index.html.twig');
    }
}
