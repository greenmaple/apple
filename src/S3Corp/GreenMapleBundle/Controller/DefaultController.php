<?php

namespace S3Corp\GreenMapleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('S3CorpGreenMapleBundle:Default:index.html.twig', array('name' => $name));
    }
}
