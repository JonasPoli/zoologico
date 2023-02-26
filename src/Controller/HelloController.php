<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    #[Route('/dinossauro')]
    public function dinossauro(): Response
    {
        return new Response('Olá, dinossauro!');
    }

    #[Route('/mamíferos')]
    public function mamífero(): Response
    {
        return new Response('Olá, mamífero!');
    }

    #[Route('/invertebrados')]
    public function invertebrados(): Response
    {
        return new Response('Olá, invertebrado!');
    }

    #[Route('/insetos')]
    public function insetos(): Response
    {
        return new Response('Olá, inseto!');
    }

    #[Route('/aves')]
    public function aves(): Response
    {
        return new Response('Olá, ave!');
    }

    #[Route('/felinos')]
    public function felinos(): Response
    {
        return new Response('Olá, felino!');
    }
}