<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artist", name="artist_list")
     */
    public function index()
    {
//        return $this->json([
//            'message' => 'Artist Controller',
//            'path' => 'src/Controller/ArtistController.php',

//        ]);
        return $this->render('artists/list.html.twig');
    }
}
