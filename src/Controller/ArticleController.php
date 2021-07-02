<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ArticleController
{
    /**
     * @Route("/article", name="article")
     */
    public function article()
    {
        return new Response('Bonbon');
    }

    /**
     * utilisation du système de wildcard permet d'affichier "variable",
     * "id", "name du art" dns l'url afin de remplacer ?="variable"
     * @Route("/article/{id}", name="articleShow")
     */
    public function articShow($id)
    {
        return new Response($id);
    }
}