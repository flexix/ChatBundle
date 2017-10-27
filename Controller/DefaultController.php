<?php

namespace Flexix\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlexixChatBundle:Default:index.html.twig');
    }
}
