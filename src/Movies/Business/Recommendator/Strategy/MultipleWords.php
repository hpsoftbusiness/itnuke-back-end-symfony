<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

/**
 * All titles that consist of more than 1 word
 */
class MultipleWords implements Strategy
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
            if (str_word_count($movie) > 1) {
                $result[] = $movie;
            }
        }

        return $result;
    }
}