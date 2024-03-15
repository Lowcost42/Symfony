<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DiyController extends AbstractController
{
    #[Route('/travaux/{slug}-{}id', name: 'diy.show')]
    public function index($request): Response
    {
        // return $this->render('diy/index.html.twig', [
        //     'controller_name' => 'DiyController',
        // ]);


        dd($request);
    }
}
