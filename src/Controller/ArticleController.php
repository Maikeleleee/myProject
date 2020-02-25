<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    /**
     * @Route("/") 
     */
    public function homepage()
    {
        return new Response('Test');
    }

    /**
     * @Route("/articles/{titre}")
     */
    public function show($titre)
    {
        $comments = ["Commentaire 1", "Commentaire 2", "Commentaire 3"];

        return $this->render('article/show.html.twig', [
            "titre" => $titre,
            "maVariable" => "test",
            "comments" => $comments
        ]);
    }
}
