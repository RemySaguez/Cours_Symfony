<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MovieRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController 

{
    #[Route(path: '/', name: 'index')]
    public function index(
        MovieRepository $movieRepository
    ): Response
    {
        $movies= $movieRepository->findAll();

        return $this->render('index.html.twig', [
            'movies' =>$movies
        ]);
    }
}