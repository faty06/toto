<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    //Route est une annotation = ici on appel le chemin du dossier la class articleController
    /**
     * @Route("/", name="home")
     */
    // Response = il s'agit de la reponse du requete http que le serveur envoie au Client (navigateur)
    public function home() {
        return new Response('Accueil');
    }

    /**
     * @Route("/mention", name="mention")
     */
    public function mention() {
        return new Response('Mention légales');
    }

    //$request = Request::createFromGlobals
}