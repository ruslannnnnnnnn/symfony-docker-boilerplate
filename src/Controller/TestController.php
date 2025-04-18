<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{

    #[Route("/test")]
    public function testRoute(Request $request): JsonResponse
    {
        return new JsonResponse(["success" => true]);
    }

}