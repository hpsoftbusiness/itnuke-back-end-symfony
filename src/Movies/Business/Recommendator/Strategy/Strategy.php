<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

/**
 * Recommendation strategy
 */
interface Strategy
{
    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array;
}