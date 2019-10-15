<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LabelController extends AbstractController
{
    /**
     * @Route("/label", name="label_page")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Label Controller',
            'path' => 'src/Controller/LabelController.php',
        ]);
    }
}
