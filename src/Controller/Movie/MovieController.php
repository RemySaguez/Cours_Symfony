<?php

declare(strict_types=1);

namespace App\Controller\Movie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MovieController extends AbstractController
{
    #[Route('/movie/{id}', name: 'movie')]
    public function movie(Movie $movie): Response 

    {
        return $this->render('movie/detail.html.twig', [
            'movie' => $movie
        ]);
    }

    #[Route('/serie', name: 'serie')]
    public function series(): Response

    {
        return $this->render('movie/detailSerie.html.twig');
    }
}