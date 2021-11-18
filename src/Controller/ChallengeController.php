<?php

namespace App\Controller;

use App\Entity\Challenge;
use App\Repository\ChallengeRepository;
use App\Controller\ParticipantsController;
use App\Repository\ParticipantsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChallengeController extends AbstractController
{
    #[Route('/challenge', name: 'challenge')]
    public function index(ChallengeRepository $challengeRepo, ParticipantsRepository $participantsRepo): Response
    {
        return $this->render('challenge/index.html.twig', [
            'controller_name' => 'ChallengeController',
        ]);
    }
}
   
