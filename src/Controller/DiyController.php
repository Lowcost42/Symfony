<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class DiyController extends AbstractController
{
    #[Route('/travaux/{slug}-{id}', name: 'diy.show', requirements: ['id' => '\d+', 'slug' => '[a-z0-9\-]+'])]
    public function index(Request $request): Response
    {
        dd($request->attributes->get('slug'), $request->attributes->get('id'));
    }
}
