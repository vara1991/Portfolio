<?php

namespace App\Controller;

use App\Entity\Photo;
use App\Entity\Project;
use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index(ProjectRepository $projectRepository)
    {
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/project/{id}", name="project_show")
     */
    public function show(Project $project)
    {
        return $this->render('project/show.html.twig', [
            'project'=> $project,
            'photos' => $project->getPhotos(),
        ]);
    }

    /**
     * @Route("/project/img/{id}", name="img_show")
     */
    public function showImg(Photo $photo)
    {
        return $this->render('project/img.html.twig', [
            'photo' => $photo,
        ]);
    }
}
