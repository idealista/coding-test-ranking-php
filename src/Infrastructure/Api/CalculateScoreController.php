<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

final class CalculateScoreController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([]);
    }
}
