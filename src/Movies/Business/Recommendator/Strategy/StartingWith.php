<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

/**
 * All films with the letter 'W' are returned but only if they have an even number of characters in the title.
 */
class StartingWith implements Strategy
{
    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array
    {
        $result = [];

        foreach ($movies as $movie) {
            if (mb_substr($movie, 0, 1) == 'W' && mb_strlen($movie) % 2 == 0) {
                $result[] = $movie;
            }
        }

        return $result;
    }
}