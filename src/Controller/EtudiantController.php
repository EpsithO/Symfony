<?php

namespace App\Controller;

use App\Repository\EtudiantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiants', name: 'app_etudiant_liste')]
    public function list(EtudiantRepository $etudiantRepository): Response
    {
        //liste des etudiant
        $etudiants = $etudiantRepository->findAll();

        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants,
        ]);
    }

    #[Route('/etudiants/{id}', name: 'app_etudiant_detail', requirements: ['id' => '\d+'])]
    public function detail(EtudiantRepository $etudiantRepository, int $id): Response
    {
        $etudiant = $etudiantRepository->find($id);

        return $this->render('etudiant/detail.html.twig', [
            'etudiant' => $etudiant,
        ]);
    }

    #[Route('/etudiants/mineur', name: 'app_etudiant_mineurs_liste')]
    public function listemineur(EtudiantRepository $etudiantRepository): Response
    {
        $etudiants = $etudiantRepository->findMineur();

        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants,
        ]);
    }


}
