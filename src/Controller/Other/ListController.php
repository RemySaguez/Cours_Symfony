<?php

declare(strict_types=1);

namespace App\Controller\Other;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PlaylistRepository;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\PlaylistSubscription;

use App\Repository\PlaylistSubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ListController extends AbstractController

{
    #[IsGranted('ROLE_USER')]
    #[Route(path: '/lists', name: 'lists')]
    public function show(
        PlaylistRepository $playlistRepository,
        PlaylistSubscriptionRepository $playlistSubscriptionRepository ,
        Request $request,
    ): Response

    {
        $playlistId = $request->query->get('playlist');

        if ($playlistId) 
        {
            $playlist = $playlistRepository->find($playlistId);
        } 
        else 
        {
            $playlist = null;
        }

        $playlits = $playlistRepository->findAll();
        $subscribedPlaylists = $playlistSubscriptionRepository->findAll();

        return $this->render('other/lists.html.twig', [
            'playlists' => $playlits,
            'subscribedPlaylists' => $subscribedPlaylists,
            'activePlaylist' => $playlist,
        ]);

    }
}