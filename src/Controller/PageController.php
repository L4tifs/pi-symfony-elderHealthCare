<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; // <--- Vérifie bien cet import

class PageController extends AbstractController
{
   #[Route('/', name: 'app_home')]    
    public function index(): Response    
    {        
        return $this->render('home.html.twig');
    }
}