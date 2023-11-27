<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

interface RecommendStrategy
{
    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array;
}