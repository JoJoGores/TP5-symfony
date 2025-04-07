<?php

namespace App\Controller;

use App\Controller\CategorieController;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategorieController extends AbstractController
{
    #[Route('/categories', name: 'app_categories', methods: ['GET'])]
    public function listeCategories(CategorieRepository $repo)
     
    {
        $categories = $repo->findAll();
        return $this->render('categorie/listeCategorie.html.twig', [
            'lesCategories' => $categories
        ]);
    }
    #[Route('/categorie/{id}', name: 'ficheCategorie', methods: ['GET'])]
    public function lafficheCategories(Categorie $repo)
     
    {
        $categories = $repo->findAll();
        return $this->render('categorie/ficheCategorie.html.twig', [
            'lesCategories' => $categories
        ]);
    }
} 
