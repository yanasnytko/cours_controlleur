<?php

// src/Controller/BlogApiController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogApiController extends AbstractController
{
#[Route('/recherche/{id}', methods: ['GET', 'HEAD'])]
public function show(int $id): JsonResponse
    {
        if ($id <= 10) {
            return new JsonResponse(['examen raté']);
        } else if ($id > 10 && $id < 15) {
            return new JsonResponse(['examen réussi']);
        } else if ($id >= 15) {
            return new JsonResponse(['Félicitations belle réussite !']);
        } else {
            return new JsonResponse(['Connais pas']);
        }
        
    }

#[Route('/affiche/{string}', methods: ['GET', 'HEAD'])] 
public function string($string): JsonResponse
    {
        if (is_numeric($string)) {
            throw new NotFoundHttpException('It is a number');
        } else {
            return new JsonResponse([$string]);
        }
        
    }
}


// {
//     // ...
//     #[Route('/blog/{slug}', name: 'blog_show')]
//     public function show(BlogPost $post): Response
//     {
//     // $post is the object whose slug matches the routing parameter
//     // ...
//     }
//     }