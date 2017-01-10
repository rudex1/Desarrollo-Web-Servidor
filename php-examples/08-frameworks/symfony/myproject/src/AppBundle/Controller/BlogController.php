<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    // /blog
    public function listAction()
    {
        // 
        return new Response('<b>/blog</b>');
    }

    // /blog/{slug}
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        //return $this->render('blog/blog.html.twig', array('name' => $name));
        
    }
    
}