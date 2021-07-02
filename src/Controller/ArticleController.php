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
    public function article() //public = methode
    {
        //je retourne une reponse valide pour ma pg d'article puis je retourne HttpFoundation
        return new Response('Bonbon');
    }

    /**
     * utilisation du système de wildcard permet d'affichier "variable",
     * "id", "name du art" dns l'url afin de remplacer ?="variable"
     * @Route("/article/{id}", name="articleShow")
     */
    public function articShow($id)
    {
        //ici je crée un tableau comme j'avais récuperé la bdd
        $articles = [
            '1' => [
                "title" => "L'été c'est trop génialeeee",
                "content" =>"youpi",
                "id" => 1
            ],
            '2' => [
                "title" => "La chaleur c'est de la merde",
                "content" =>"blablabla",
                "id" => 2
            ],
            '3' => [
                "title" => "Avoir des migraine c'est trop cool",
                "content" =>"blablabla",
                "id" => 3
            ],
            '4' => [
                "title" => "juju",
                "content" =>"blablabla",
                "id" => 4
            ],
        ];
            //cet variable permet la recupe la wildcard
            $article = $articles[$id];


            return new Response($article['title']); //ici je recupere le titre de mon tableau
    }
}