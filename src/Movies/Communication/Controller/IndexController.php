<?php

declare(strict_types=1);

namespace App\Movies\Communication\Controller;

use App\Movies\Business\MoviesFacadeInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\HttpKernel\Log\Logger;
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
    public function recommendation(MoviesFacadeInterface $moviesFacade, Request $request): JsonResponse
    {
        return new JsonResponse($moviesFacade->getRecommendation($request->get('type')));
    }

    #[Route('/api/projects/enroll', name: 'enroll')]
    public function enroll(Request $request, LoggerInterface $logger): JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);

        return new JsonResponse($requestData);
    }
}