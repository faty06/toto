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
    public function poker(Request $request)
    {

        //Ici on a stockage du $request et la valeur du parametre GET => age
        $age = $request->query->get('age');

        //j'ai les condiction du du if
        if ($age >= '18')
        {
            //Dns cet return: l'age user a  >= 18 il va avoir un message "Bienvenue Chez Poker Man"
            return new Response('Bienvenue Chez Poker Man');
        }
        else{
            return $this->render('test_poker.html');
           // return $this->redirectToRoute('home'); permet de rediriger vers home
            //Cette methode permet d'evoyer un pg html
        }
    }

 }