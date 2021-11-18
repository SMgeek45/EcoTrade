<?php

namespace App\Controller;

use App\Entity\Auth;
use App\Repository\AuthRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'auth_index')]
    #[IsGranted ('ROLE_USER')]
    public function index(UserRepository $auth,): Response
    {
        $user = $this -> getUser();
        
        return $this->render('auth/index.html.twig', [
            'controller_name' => 'AuthController',
        ]);
    }
}
