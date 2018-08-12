<?php
/**
 * Created by PhpStorm.
 * User: anas
 * Date: 12/08/18
 * Time: 00:39
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostsController extends Controller
{

    /**
     * @Route("/blog")
     * @Method("GET")
     */
    function indexAction()
    {
        return $this->render("blog.html.twig");
    }
}