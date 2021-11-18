<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\ChallengeController;

class ParticipantsController extends AbstractController
{
    #[Route('/participants', name: 'participants')]
    public function index(): Response
    {
        $challenge = [
            'id' => ''
        ];

        $contact = [
            'Nettoyage' => 1,
            'Sauvetage' => 2,
            'Humaniataire' => 3,
            'Tri / recyclage / seconde vie' => 4,
            'Maintien de l`emploi / start-up' => 5,
            'Sensibilisation (lieu public)' => 6,
            'Intervention (établissement)' => 7,
        ];
        return $this->render('participants/index.html.twig', [
            'controller_name' => 'ParticipantsController',
        ]);
    }
}
