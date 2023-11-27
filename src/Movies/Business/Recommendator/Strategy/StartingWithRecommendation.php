<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

class StartingWithRecommendation implements RecommendStrategy
{
    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array
    {
       return [];
    }
}