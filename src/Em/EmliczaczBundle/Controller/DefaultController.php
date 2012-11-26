<?php

namespace Em\EmliczaczBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EmEmliczaczBundle:Default:index.html.twig', array('name' => $name));
    }
}
