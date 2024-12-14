<?php

declare(strict_types=1);

namespace App\Controller\Movie;
use App\Repository\MovieRepository;
use App\Repository\SerieRepository;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\MediaRepository;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends AbstractController  

{
    #[Route('/discover', name: 'discover')]

    public function index(
        CategoryRepository $categoryRepository,
    ): Response

    {
        $categories = $categoryRepository-> findAll();

        return $this->render('movie/discover.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/category/{id}', name: 'category')]
    public function show(
        Category $category
    ): Response
    
    {
        return $this-> render('movie/category.html.twig', [
            'category' => $category,
        ]);
    }
}