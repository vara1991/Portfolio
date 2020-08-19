<?php

namespace App\Controller;

use App\Entity\Cv;
use App\Repository\CvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CvController extends AbstractController
{
    /**
     * @Route("/cv", name="cv")
     */
    public function index(CvRepository $cv)
    {
        return $this->render('cv/index.html.twig', [
            'cv' => $cv->findAll(),
        ]);
    }
}
