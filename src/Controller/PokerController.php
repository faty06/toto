<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PokerController extends AbstractController
//ATTENTION : n'oublie pas CONTROLLER
{
    /**
     * @Route("/poker", name="poker")
     */
    public function Poker()
    {

        //createFromGlobal est une methode qui permet de recuperer les parametre de Get et Post s'ils existent
        $request = Request::createFromGlobals();

        //Ici on a stockage du $request et la valeur du parametre GET => age
        $age = $request->query->get('age');

        //j'ai les condiction du du if
        if ($age >= '18') {
            //Dns cet return: l'age user a  >= 18 il va avoir un message "Bienvenue Chez Poker Man"
            return new Response('Bienvenue Chez Poker Man');
        } else {
            //sinon: l'age user est < 18 il va avoir un message "Merci de Revenir dans 50ans"
            //on peut aussi cette methode $url = $this->generateuUrl
            return $this->redirectToRoute('home');
            //La methode redirectToRoute permet de redriger vers une autre page : ici c'est pg home
            //this-> a pour objectif de faire appel
            //AbstractionController permet d'hériter une classe
        }
    }

    /**
     * @Route("/poker2", name="poker2")
     */
    public function poker2(Request $request) //l'injection de dépendances ou l'autowaire
    {

        //Ici on a stockage du $request et la valeur du parametre GET => age
        $age = $request->query->get('age');

        //j'ai les condiction du du if
        if ($age >= '18') {
            //Dns cet return: l'age user a  >= 18 il va avoir un message "Bienvenue Chez Poker Man"
            return new Response('Bienvenue Chez Poker Man');
        } else {
            //sinon: l'age user est < 18 il va avoir un message "Merci de Revenir dans 50ans"
            return $this->render('test_poker.html');
            //La methode render permet d'envyer vers une page html
        }
    }
}

