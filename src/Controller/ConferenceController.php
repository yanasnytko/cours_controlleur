<?php 
# src/Controller/ConferenceController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// $response->setContent(json_encode([
//     'data' => 123,
// ]));
//$response->headers->set('Content-Type', 'application/json');

//$name_json_response = new JsonResponse(['nom' => 'Snytko', 'prenom' => 'Yana', 'rue' => 'Rue Milo']);

class ConferenceController extends AbstractController
{
    #[Route('/conference', name: 'app_conference')]
    public function index(): Response
    {
        return $this->render('conference/index.html.twig', [
            'nom' => 'Snytko',
            'prenom' => 'Yana',
            'rue' => 'Rue Milo',
        ]);
        //return new Response('<h1>hello world</h1>');
        //return new JsonResponse(['nom' => 'Snytko', 'prenom' => 'Yana', 'rue' => 'Rue Milo']);
    }

}