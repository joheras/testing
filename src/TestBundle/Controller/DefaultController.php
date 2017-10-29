<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response('Esta es la portada');
    }
    
    public function postsAction()
    {
        return new Response('Esta es la página con los posts');
    }
    
    public function postAction($slug)
    {
        return new Response('Esta es la página del post ' . $slug);
    }
    
    public function archivesAction()
    {
        return new Response('Esta es la página de los archivos');
    }
}
