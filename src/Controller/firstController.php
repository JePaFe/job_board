<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class firstController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index() : Response
    {
        return new Response('<h1>Hola mundo</h1>');
    }
}