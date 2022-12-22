<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EleveRepository;


class StagiairesController extends AbstractController
{
    #[Route('/stagiaires', name: 'app_stagiaires')]
    public function index(EleveRepository $eleveRepository): Response
    {
        $eleves = $eleveRepository->findAll();
        return $this->render('stagiaires/index.html.twig', [
            'controller_name' => 'StagiairesController',
            'eleves' => $eleves,
        ]);
    }
}
