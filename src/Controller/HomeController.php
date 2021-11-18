<?php

namespace App\Controller;

use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use App\Controller\DescriptionController;
use App\Repository\DescriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'home')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
       $user = $this -> getUser();
        return $this->render('home/index.html.twig', [
            'user' => $user,
        ]);
    }
     
    #[Route('/edit-description', name: 'home_edit_description')]
    #[IsGranted('ROLE_USER')]
    public function description(Request $request, EntityManagerInterface $em): Response
    {
       $user = $this -> getUser();
       if ($request->request->all()) {
           $user-> setDescription(
            $request->request->get('description')
           );
           $em -> flush();
           $this->addFlash("success","Description créee");
       }
    return $this->redirectToRoute('home');
    }
}
