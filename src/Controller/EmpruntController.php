<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EmpruntRepository;

class EmpruntController extends AbstractController
{
    /**
     * @Route("/admin/emprunt", name="emprunt")
     */
    public function index(EmpruntRepository $empruntRepository): Response
    {
        $listeEmprunts = $empruntRepository->findAll();  // SELECT * FROM livre
        return $this->render('emprunt/index.html.twig', [
            'emprunts' => $listeEmprunts,
        ]);
    }
}
