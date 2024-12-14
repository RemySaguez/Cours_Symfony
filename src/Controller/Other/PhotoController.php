<?php

declare(strict_types=1);

namespace App\Controller\Other;


use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class PhotoController extends AbstractController
{

    #[Route(path: '/upload' , name: 'picture_upload')]
    public function upload(): Response

    {
        return $this->render('other/upload.html.twig');
    }
}