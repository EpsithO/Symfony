<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienvenueController extends AbstractController
{
    #[Route('/welcome', name: 'app_bienvenue')]
    public function bienvenue(): Response
    {
        // Appelle simulé au modèle
        // Apelle a la vue
        return $this->render('bienvenue/index.html.twig',[
        ]);

    }

    #[Route('/bienvenue/{prenom}', name: 'app_bienvenue_bienvenueprenom')]
    public function bienvenuePrenom(string $prenom): Response
    {
        // Appelle simulé au modèle
            $prenom = 'Mathéo';
        // Apelle a la vue
        return $this->render('bienvenue/index.html.twig',[
            'prenom' => $prenom,
        ]);

    }

    #[Route('/bienvenues', name: 'app_bienvenues')]
    public function bienvenues(): Response
    {
        // Appelle simulé au modèle
        $EquipageOnePiece = ["Luffy", "Zoro", "Nami", "Usopp", "Sanji", "Chopper", "Robin", "Franky", "Brook", "Jinbe"];
        // Apelle a la vue
        return $this->render('bienvenue/bienvenues.html.twig',[
            'EquipageOnePiece' => $EquipageOnePiece
        ]);

    }

}
