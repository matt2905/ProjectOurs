<?php

namespace Ours\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('OursUserBundle:User:index.html.twig');
    }
}