<?php

namespace App\Controller;

use App\Repository\ChallengeRepository;
use App\Repository\ParticipantsRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(ChallengeRepository $challengeRepo,
    ParticipantsRepository $participantsRepo, UserRepository $friendsRepo): Response
    {
        $user = $this -> getUser();
        $challenges = $challengeRepo->findBy([
            'user'=> $user,
        ]);
        $participants = [];
        foreach ($challenges as $challenge) {
            $participantsChallenge = $participantsRepo -> findBy([
                'challenge_id' => $challenge,
            ]);
            foreach ($participantsChallenge as $pc) {
                $participants[] = $pc ;
            }
        }

        $user = $this -> getUser();
        $friends = $friendsRepo->findBy([
            'user'=> $user,
        ]);
        $participants = [];
        foreach ($friends as $participants) {
            $friends = $friendsRepo -> findBy([
                'participants_id' => $friends,
            ]);
            foreach ($user as $users) {
                $users[] = $users ;
            }
        }

        return $this->render('contact/index.html.twig', [
            'participants' => $participants,
        ]);
    }
}
