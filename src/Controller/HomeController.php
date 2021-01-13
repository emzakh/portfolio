<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/me", name="me")
     * 
     */
    public function presentation(): Response
    {
        return $this->render('home/me.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/work", name="work")
     *
     */
    public function work(): Response
    {
        return $this->render('home/work.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

}
