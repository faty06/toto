<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleSyController
{
    //Route est une annotation = ici on appel le chemin du dossier la class articleController
    /**
     * @Route("/articles", name="articles")
     */
    public function articles() {
       return new Response('liste Articles');
       // Response = il s'agit de la reponse du requete http que le serveur envoie au Client (navigateur)
    }
}

?>