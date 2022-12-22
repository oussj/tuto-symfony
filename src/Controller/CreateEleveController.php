<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Repository\EleveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateEleveController extends AbstractController
{
    #[Route('/create/eleve', name: 'app_create_eleve')]
    public function index(EleveRepository $eleveRepository): Response
    {
        $eleve = new Eleve();
        $eleve->setName('Oussamah');
        $eleveRepository->save($eleve, true);



        return new Response('OK');
    }
}
