<?php

declare(strict_types=1);

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AuthController extends AbstractController

{
    #[Route(path: '/login_', name: 'login')]
    public function login(): Response

    {
        return $this->render('auth/login.html.twig');
    }

    #[Route(path: '/register_', name: 'register')]
    public function register(): Response

    {
        return $this->render('auth/register.html.twig');
    }

    #[Route(path: '/forgot_', name: 'forgot')]
    public function forgot(): Response

    {
        return $this->render('auth/forgot.html.twig');
    }

    #[Route(path: '/confirm_', name: 'confirm')]
    public function confirm(): Response

    {
        return $this->render('auth/confirm.html.twig');
    }

    #[Route(path: '/reset_', name: 'reset')]
    public function reset(): Response

    {
        return $this->render('auth/reset.html.twig');
    }

    #[Route(path: '/logout_', name: 'logout')]
    public function logout(): Response
    
    {
        $url = $this->generateUrl('homepage');

        return new RedirectResponse($url);
    }
}