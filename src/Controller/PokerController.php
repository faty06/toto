<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class Poker
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
        if ($age >= '18')
        {
            //Dns cet return: l'age user a  >= 18 il va avoir un message "Bienvenue Chez Poker Man"
            return new Response('Bienvenue Chez Poker Man');
        }else{
            //sinon: l'age user est < 18 il va avoir un message "Merci de Revenir dans 50ans"
            return new Response('Merci de Revenir dans 50ans');
        }
    }

 }