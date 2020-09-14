<?php

namespace App\Controller;

use App\Repository\BioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(BioRepository $bioRepository)
    {
        return $this->render('home/index.html.twig',[
            'bio' => $bioRepository->findAll()
            ]);
    }
}
