<?php

namespace CityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CityBundle:Default:index.html.twig');
    }
}
