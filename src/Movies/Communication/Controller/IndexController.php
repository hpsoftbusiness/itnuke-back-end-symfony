<?php

declare(strict_types=1);

namespace App\Movies\Communication\Controller;

use App\Movies\Business\MoviesFacadeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Main movies module controller
 */
class IndexController extends AbstractController
{
    /**
     * @param MoviesFacadeInterface $moviesFacade
     * @param Request $request
     *
     * @return JsonResponse
     */
    #[Route('/api/projects/recommendations')]
    public function number(MoviesFacadeInterface $moviesFacade, Request $request): JsonResponse
    {
        return new JsonResponse($moviesFacade->getRecommendation($request->get('type')));
    }
}