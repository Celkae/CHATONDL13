<?php

namespace ChatonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/miaule")
     */
    public function miauleAction()
    {
        return new Response('miaou');
    }

    /**
     * @Route("/mange")
     */
    public function mangeAction()
    {
        return new Response('crock crock');
    }
}
