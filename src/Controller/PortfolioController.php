<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller{
    
    public function index()
    {
        return $this->render('index2.html.twig');
    }
}