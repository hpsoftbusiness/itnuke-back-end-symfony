<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

/**
 * 3 random titles
 */
class Random implements Strategy
{
    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array
    {
        $randomKeys = array_rand($movies,3);

        return [$movies[$randomKeys[0]], $movies[$randomKeys[1]], $movies[$randomKeys[2]]];
    }
}