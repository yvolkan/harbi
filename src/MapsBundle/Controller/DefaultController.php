<?php

namespace MapsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MapsBundle:Default:index.html.twig');
    }
    
    public function profileAction()
    {
        return $this->render('MapsBundle:Default:profil.html.twig');
    }    
}