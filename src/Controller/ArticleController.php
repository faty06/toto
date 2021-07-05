<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ArticleController extends AbstractController
//tjrs mettre l'extends AbstractController
{
    private $articles = [
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

    /**
     * @Route("/articles", name="article")
     */

    public function articleList()
    {
        //je retourne une reponse valide pour ma pg d'article puis je retourne HttpFoundation
        //return new Response('articles');
        return $this->render('article_list.html.twig',['articles' => $this->articles]);
    }

    /**
     * utilisation du système de wildcard permet d'affichier "variable",
     * "id", "name du art" dns l'url afin de remplacer ?="variable"
     * @Route("/article/{id}", name="articleShow")
     */
    public function articleShow($id)
    {
            return $this->render('article_show.html.twig', [
            'article' => $this->articles[$id]
            ]);
           // return new Response('test');
            //la Methode "render  extends AbstractController" permet de recuperer un fichier "twig" qui
            // converti en html puis il envoie une "Responce" HTTP au "Client"
    }

}